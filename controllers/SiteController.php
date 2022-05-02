<?php 

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\AddResidentModel;
class SiteController extends Controller{

    public function home(){
        $params = [
            'name' => 'Chedrick'
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
        if($request->isPOST()){
            $AddResidentModel = new AddResidentModel();
            return "handling data";
        }
        return $this->render('addresident');
    }
}
