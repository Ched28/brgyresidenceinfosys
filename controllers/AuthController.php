<?php 


namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

use app\core\Response;
use app\models\loginForm;

class AuthController extends Controller{
    public function login(Request $request, Response  $response){

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
}