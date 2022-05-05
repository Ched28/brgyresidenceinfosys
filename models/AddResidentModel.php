<?php 


namespace app\models;

use app\core\DbModel;
use app\core\Model;

class AddResidentModel extends DbModel {

    const RESIDENT_TYPE_NEW = 'New';
    const RESIDENT_TYPE_OLD = 'Old';
    const TRANSACT_TYPE_NEW = 'NEW RESIDENT';
    const TRANSACT_METHOD_ADD = 'ADD';
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
    public string $residenttype = '';
    public string $trans_type = '';
    public string $trans_method = '';


    public function tableName() : string
    {
        return 'brgy_res_info';
    }
    public function TransactTable(): string {
        return 'brgy_transaction';
    }
    public function save(){
        $this->saveForTransaction();
        $this->residenttype = self::RESIDENT_TYPE_NEW;
        parent::save();
    }
    public function saveForTransaction()
    {


        $this->trans_type = self::TRANSACT_TYPE_NEW;
        $this->trans_method = self::TRANSACT_METHOD_ADD;
        parent::saveForTransaction();
    }

    // for password encrpt $this->password = password_hash($this->password, PASSWORD_DEFAULT); return parent::save();

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
            'residenttype',

            ];
    }

    public function attributesforTransact(): array {
            return [
                'transactionid',
                'brgyid',
                'trans_method',
                'trans_type',

            ];
    }

}