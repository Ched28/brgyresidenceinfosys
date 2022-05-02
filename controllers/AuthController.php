<?php 


namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class AuthController extends Controller{
    public function login(){
        $this->setLayout('auth');
        return $this->render('login');
    }
}