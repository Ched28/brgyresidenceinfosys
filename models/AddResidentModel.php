<?php 


namespace app\models;

use app\core\DbModel;
use app\core\Model;

class AddResidentModel extends DbModel {
    public string $transactionid = '';
    public string $brgyid = '';
    public string $lastname = '';
    public string $firstname = '';
    public string $middlename ='';
    public string $suffix = '';
    public string $birthday = '';
    public string $birthplace = '';
    public string $contact1 = '';
    public string $contact2 = '';
    public string $telno = '';
    public string $emailadd = '';
    public string $gender = '';
    public string $civilstatus = '';
    public string $province = '';
    public string $religion = '';
    public string $nationality = '';

    public function tableName() : string
    {
        return 'brgy_res_info';
    }

    public function addData(){
        $this->save();
    }

    public function rules(): array{
        return [
            'transactionid' => [self::RULES_REQUIRED],
            'brgyid' => [self::RULES_REQUIRED],
            'lastname' => [self::RULES_REQUIRED],
            'firstname' => [self::RULES_REQUIRED],
            'middlename' => [self::RULES_REQUIRED],
            'birthday' => [self::RULES_REQUIRED],
            'birthplace' => [self::RULES_REQUIRED],
            'contact1' => [self::RULES_REQUIRED, [self::RULES_MIN, 'min' => 10], [self::RULES_MAX, 'max' => 11]],
            // 'contact2' => [[self::RULES_MIN, 'min' => 10], [self::RULES_MAX, 'max' => 11]],
            'emailadd' => [self::RULES_REQUIRED, self::RULES_EMAIL],
            'gender' => [self::RULES_REQUIRED],
            'civilstatus' => [self::RULES_REQUIRED],
            'religion' => [self::RULES_REQUIRED],
            'nationality' => [self::RULES_REQUIRED],
            'province' => [self::RULES_REQUIRED],
            
        ];
    }

    public function attributes(): array{
        return [
            'brgyid',
            'lastname',
            'firstname',
            'middlename',
            'suffix',
            'birthday',
            'birthplace',
            'contact1',
            'contact2',
            'telno',
            'emailadd',
            'gender',
            'civilstatus',
            'religion',
            'nationality',
            'province',
        ];
    }

}