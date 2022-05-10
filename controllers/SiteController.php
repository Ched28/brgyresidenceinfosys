<?php 

namespace app\controllers;

use app\core\Controller;


class SiteController extends Controller{

    public function home(){
        $params = [
            'email' => 'admin#gmail.com'
        ];
        return $this->render('home', $params);
    }


}
