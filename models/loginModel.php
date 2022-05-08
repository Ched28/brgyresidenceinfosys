<?php

namespace app\models;

use app\core\Application;
use app\core\Model;

class loginModel extends Model
{
    public string $empusername;
    public string $emppassword;


    public function rules(): array
    {
        return [
            'username' => [self::RULES_REQUIRED],
            'password' => [self::RULES_REQUIRED],

        ];
    }


    public function login(){

            $username = AddEmployee::findOne(['empusername' => $this->empusername]);
            if(!$username){
                
            }
        Application::$app->login();
    }


}