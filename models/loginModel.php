<?php

namespace app\models;

use app\core\Application;
use app\core\Model;

class loginModel extends Model
{
    public string $empusername = '';
    public string $emppassword = '';


    public function rules(): array
    {
        return [
            'empusername' => [self::RULES_REQUIRED],
            'emppassword' => [self::RULES_REQUIRED],

        ];
    }


    public function login(){

            $username = AddEmployee::findOne(['empusername' => $this->empusername]);
            if(!$username){
                $this->addError('empusername', 'The User doesnt exists');
                return false;
            }
            if(!password_verify($this->emppassword, $username->EmpPassword)){
                $this->addError('emppassword', 'The Password are incorrect');
                return false;
            }
        return Application::$app->login($username);
    }


}