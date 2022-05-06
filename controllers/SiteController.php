<?php 

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\AddResidentModel;
class SiteController extends Controller{

    public function home(){
        $params = [
            'name' => 'Chedrick',
            'emailadd' => 'chedrick@gmail.com'
        ];
        return $this->render('home', $params);
    }
    // public function AddResident(){
    //     return Application::$app->router->renderView('addresident');
    // }
    public function EditResident(){
        return Application::$app->router->renderView('editresident');
    }
    public function AddResident(Request $request){
        $AddResidentModel = new AddResidentModel();
        if($request->isPOST()){
            $AddResidentModel->loadData($request->getBody());
            if($AddResidentModel->validate()){
               // return '<script>alert("Welcome to Geeks for Geeks")</script>';
               // return header('LOCATION: /');
                $AddResidentModel->save();
                $AddResidentModel->saveForTransaction();
                return Application::$app->response->redirect('/');
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
}
