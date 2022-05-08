<?php 


namespace app\models;

use app\core\Application;
use app\core\DbModel;
use app\core\Model;

class AddEmployee extends DbModel {

    public string $empId = '';
    public string $emplastname = '';
    public string $empfirstname = '';
    public string $empmiddlename = '';
    public string $empsuffix = '';
    public string $empbirthday = '';
    public string $empcontactNo1 = '';
    public string $empcontactNo2 = '';
    public string $emailadd = '';
    public string $empusername = '';
    public string $emppassword = '';

    const TRANSACT_TYPE_NEW = 'NEW EMPLOYEE';
    const TRANSACT_METHOD_ADD = 'ADD';




    public function tableName() : string
    {
        return 'brgy_emp_inf';
    }
    public function TransactTable(): string {
        return 'brgy_transaction';
    }
    public function save(){

        $statement = Application::$app->db->prepare("SELECT `empId` FROM `brgy_emp_inf` ORDER BY `empId` DESC LIMIT 1;");
        $statement->execute();

        $rowCount = $statement->rowCount();

        if($rowCount > 0){
            foreach ($statement as $row){
                $brgyidno = $row['empId'];
                $get_numbers = str_replace("EMP-", "", $brgyidno);
                $inc_number = $get_numbers+1;
                $get_string = str_pad($inc_number, 4, 0, STR_PAD_LEFT);
                $this->empId = "EMP-$get_string";
            }
        }else{
            $this->empId = 'EMP-0001';
        }

        parent::save();

    }
    public function saveForTransaction()
    {
        $statement = Application::$app->db->prepare("SELECT `transactionid` FROM `brgy_transaction` ORDER BY `transactionid` DESC LIMIT 1;");
        $statement->execute();

        $rowCount = $statement->rowCount();

        if($rowCount > 0){
            foreach ($statement as $row){
                $transactionidno = $row['transactionid'];
                $get_numbers = str_replace("TRANSACT-2022-", "", $transactionidno);
                $inc_number = $get_numbers+1;
                $get_year = date('Y');
                $get_string = str_pad($inc_number, 7, 0, STR_PAD_LEFT);
                $this->transactionid = "TRANSACT-$get_year-$get_string";
            }
        }else{
            $this->transactionid = 'TRANSACT-2022-0000001';
        }


        $this->trans_type = self::TRANSACT_TYPE_NEW;
        $this->trans_method = self::TRANSACT_METHOD_ADD;
        parent::saveForTransaction();
    }

    // for password encrpt $this->password = password_hash($this->password, PASSWORD_DEFAULT); return parent::save();

    public function rules(): array{
        return [
            'emplastname' => [self::RULES_REQUIRED],
            'empfirstname' => [self::RULES_REQUIRED],
            'empmiddlename' => [self::RULES_REQUIRED],
            'empbirthday' => [self::RULES_REQUIRED],
            'empcontactNo1' => [self::RULES_REQUIRED, [self::RULES_MIN, 'min' => 10], [self::RULES_MAX, 'max' => 11]],
            'emailadd' => [self::RULES_REQUIRED],
            'empusername' => [self::RULES_REQUIRED],
            'emppassword' => [self::RULES_REQUIRED],
            
        ];
    }

    public function attributes(): array{
        return [
            'empId',
            'emplastname',
            'empfirstname',
            'empmiddlename',
            'empsuffix',
            'empbirthday',
            'empcontactNo1',
            'empcontactNo2',
            'emailadd',
            'empusername',
            'emppassword',

            ];
    }

    public function attributesforTransact(): array {
            return [
                'transactionid',

                'trans_method',
                'trans_type',
                'empId'

            ];
    }



}