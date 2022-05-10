<?php 


namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;

use app\core\Response;
use app\models\AddEmployee;
use app\models\loginForm;
use app\models\ResidentModel;

class AuthController extends Controller{

    public function __construct()
    {
        $this->middlewareEmployee(new AuthMiddleware(['profile','AddResident','AddEmployee','logout']));
    }

    public function login(Request $request, Response  $response){
        Application::$app->view->title = 'Log In';
        $loginModel = new loginForm();
        if($request->isPOST()) {
            $loginModel->loadData($request->getBody());
            if($loginModel->validate()&& $loginModel->login()){

                $response->redirect('/');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginModel
        ]);
    }

    public function logout(Request $request, Response $response){
        Application::$app->logout();
        $response->redirect('/');
    }


    public function profile(){
        return $this->render('profile');
    }
    public function EditResident(){
        return Application::$app->view->renderView('editresident');
    }
    public function AddResident(Request $request){
        Application::$app->view->title = 'Add Resident';
        $AddResidentModel = new ResidentModel();
        if($request->isPOST()){
            $AddResidentModel->loadData($request->getBody());
            if($AddResidentModel->validate()){
                // return '<script>alert("Welcome to Geeks for Geeks")</script>';
                // return header('LOCATION: /');
                //$AddResidentModel->save();
                $AddResidentModel->save();
                $AddResidentModel->saveForTransaction();

                Application::$app->session->setFlash('success', 'The Resident has been Added!');
                Application::$app->response->redirect('/');

            }else{
                return $this->render('addresident', [
                    'model' => $AddResidentModel
                ]);
            }

        }
        return $this->render('addresident', [
            'model' => $AddResidentModel
        ]);
    }
    public function AddEmployee(Request $request){
        Application::$app->view->title = 'Add Employee';
        $AddEmployee = new AddEmployee();
        if($request->isPOST()){
            $AddEmployee->loadData($request->getBody());
            if($AddEmployee->validate()&&$AddEmployee->save()){
                // return '<script>alert("Welcome to Geeks for Geeks")</script>';
                // return header('LOCATION: /');
                //$AddResidentModel->save();

                $AddEmployee->saveForTransaction();

                Application::$app->session->setFlash('success', 'The AddEmployee has been Added!');
                Application::$app->response->redirect('/');

            }else{
                return $this->render('AddEmployee', [
                    'model' => $AddEmployee
                ]);
            }

        }
        return $this->render('AddEmployee', [
            'model' => $AddEmployee
        ]);
    }
}