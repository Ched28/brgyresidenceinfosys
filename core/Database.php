<?php

namespace app\core;

class Database
{
    public \PDO $pdo;
    public function __construct(array $config)
    {
        $servername = $config['servername'] ?? '';
        $username = $config['username'] ?? '';
        $password = $config['password'] ?? '';
        $this->pdo = new \PDO($servername, $username, $password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

     public function applyMigration(){
        $this->createMigrationsTable();
        $appliedMigrations = $this->getAppliedMigration();
        $newMigrations = [];
        $files = scandir(Application::$ROOT_DIR.'/migrations');
        $toApplyMigration = array_diff($files,$appliedMigrations);
        foreach ($toApplyMigration as $migration){
            if($migration === '.' || $migration === '..'){
                continue;
            }


            require_once Application::$ROOT_DIR.'/migrations/'.$migration;
            $className = pathinfo($migration, PATHINFO_FILENAME);
            $instance = new $className;
            $this->log("Applying Migration $migration".PHP_EOL);

            $instance->up();
            $this->log("Applied Migration $migration".PHP_EOL);
            $newMigrations[] = $migration;


        }
        if(!empty($newMigrations)){
            $this->saveMigrations($newMigrations);
        }else{
            $this->log("Applied All Migrations");
        }
    }

    public function createMigrationsTable(){
        $this->pdo->exec("
        CREATE TABLE IF NOT EXISTS  migrations (
            id INT AUTO_INCREMENT PRIMARY KEY, 
            migration VARCHAR(255),
            create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
        ) ENGINE=INNODB;");


    }

    public function getAppliedMigration()
    {
       $statement = $this->pdo->prepare("SELECT migration FROM migrations");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_COLUMN);
    }

    public function saveMigrations(array $newMigrations)
    {
        $str = implode(",", array_map(fn($m) => "('$m')", $newMigrations));
        $statement = $this->pdo->prepare("INSERT INTO migrations (migration) VALUES $str");
        $statement->execute();
    }

    protected function log($message){
        echo '['.date('Y-m-d H:i:s').']'.$message.PHP_EOL;
    }

    public function prepare($sql){
        return $this->pdo->prepare($sql);
    }
}