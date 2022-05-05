<?php

class m0003_createtableforqrcode{
    public function up(){
        $db = \app\core\Application::$app->db;
        $SQL = "
        CREATE TABLE `brgy_res_info_qr` ( 
            `id` INT NOT NULL AUTO_INCREMENT , `brgyid` VARCHAR(20) NOT NULL , 
            `filename` VARCHAR(255) NOT NULL , `created_at` VARCHAR(255) NOT NULL DEFAULT 
                CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
        $db->pdo->exec($SQL);
    }
    public function down(){
        $db = \app\core\Application::$app->db;
        $SQL = "
        DROP TABLE brgy_res_info_qr;

        ";
        $db->pdo->exec($SQL);

    }
}
