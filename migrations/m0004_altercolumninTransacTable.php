<?php
class m0004_altercolumninTransacTable
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE `brgy_transaction` (
  `transactionid` int(30) NOT NULL,
  `Trans_method` varchar(20) NOT NULL,
  `Trans_Type` varchar(20) NOT NULL,
  `brgyid` varchar(20) NOT NULL,
  `EmpId` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `brgy_transaction`
  ADD PRIMARY KEY (`transactionid`);
COMMIT;
";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "
DROP TABLE `brgy_transaction`;
  

";
        $db->pdo->exec($SQL);

    }
}







