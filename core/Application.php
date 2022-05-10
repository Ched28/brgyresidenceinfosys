<?php 

namespace app\core;
use app\models\AddEmployee;

class Application{
    public static string $ROOT_DIR;
    public string $EmployeeClass;
    public Router $router;
    public Request $request;
    public Response $response;
    public Session $session;
    public Database $db;

    public ?DbModel $username;
    public static Application $app;
    public Controller $controller;
    public function __construct($rootPath, array $config){

        $this->EmployeeClass = $config['EmployeeClass'];
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);

        $this->db = new Database($config['db']);
        $primaryValue = $this->session->get('username');
        if($primaryValue){
            $primaryKey = (new \app\models\AddEmployee)->primaryKey();
            $this->username = (new \app\models\AddEmployee)->findOne([$primaryKey => $primaryValue]);

        }else{
            $this->username = null;
        }




    }
    public function run(){
       echo $this->router->resolve();
    }

    public function getController(): \app\core\Controller{
        return $this->controller;
    }
    public function setController(\app\core\Controller $controller): void{
        $this->controller = $controller; 
    }

    public function login(DbModel  $username){
        $this->username = $username;

        $primaryKey = $username->primaryKey();
        $primaryValue =$username->{$primaryKey};
        $this->session->set('username', $primaryValue);
        return true;
    }

    public function logout()
    {
        $this->username = null;
        $this->session->remove('username');
    }

}