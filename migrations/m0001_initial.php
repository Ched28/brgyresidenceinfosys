<?php

class m0001_initial{
    public function up(){
        $db = \app\core\Application::$app->db;
        $SQL = "
  CREATE TABLE `brgy_admin_info` (
  `admin_id` varchar(20) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `brgy_emp_inf` (
  `EmpId` varchar(20) NOT NULL,
  `EmpLastname` varchar(20) NOT NULL,
  `EmpFirstname` varchar(20) NOT NULL,
  `EmpMiddlename` varchar(20) NOT NULL,
  `EmpSuffix` varchar(10) NOT NULL,
  `EmpBirthday` date NOT NULL,
  `EmpContactNo1` varchar(15) NOT NULL,
  `EmpContactNo2` varchar(15) NOT NULL,
  `EmailAdd` varchar(50) NOT NULL,
  `EmpUsername` varchar(15) NOT NULL,
  `EmpPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `brgy_res_info` (
  `brgyid` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `Birthday` date NOT NULL,
  `Birthplace` varchar(20) NOT NULL,
  `contact1` varchar(15) NOT NULL,
  `contact2` varchar(15) NOT NULL,
  `TelNo` int(15) NOT NULL,
  `EmailAdd` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `CivilStatus` varchar(10) NOT NULL,
  `Religion` varchar(30) NOT NULL,
  `Province` varchar(30) NOT NULL,
  `ResidentType` varchar(30) NOT NULL,
  `precinct` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `brgy_admin_info`
  ADD PRIMARY KEY (`admin_id`);


ALTER TABLE `brgy_emp_inf`
  ADD PRIMARY KEY (`EmpId`);

ALTER TABLE `brgy_res_info`
  ADD PRIMARY KEY (`brgyid`);

    
        ";
        $db->pdo->exec($SQL);
    }
    public function down(){
        $db = \app\core\Application::$app->db;
        $SQL = "
        DROP TABLE brgy_admin_info;
        DROP TABLE brgy_emp_inf;
        DROP TABLE brgy_res_info;
        DROP TABLE brgy_transaction;

        ";
        $db->pdo->exec($SQL);

    }
}
