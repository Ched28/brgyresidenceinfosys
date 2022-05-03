<?php 


namespace app\models;

use app\core\Model;

class AddResidentModel extends Model{
    public string $lastname = " ";
    public string $firstname = " ";
    public string $middlename = " ";
    public string $suffix = " ";
    public string $birthday = " ";
    public string $birthplace = " ";
    public string $contact1 = " ";
    public string $contact2 = " ";
    public string $telno = " ";
    public string $emailadd = " ";
    public string $gender = " ";
    public string $civilstatus = " ";
    public string $province = " ";
    public string $religion = " ";
    public string $nationality = " ";

    
    public function addData(){
        return "Adding Resident Data";
    }

    public function rules(): array{
        return [
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
            
        ];
    }

}