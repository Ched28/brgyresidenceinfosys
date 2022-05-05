<?php

class m0002_createtableforsignature{
    public function up(){
        $db = \app\core\Application::$app->db;
        $SQL = "
        CREATE TABLE `brgy_res_info_signatures` (
`id` int(11) NOT NULL,
`brgyid` varchar(20) NOT NULL,
`filename` varchar(255) NOT NULL,
`created_at` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `brgy_res_info_signatures`
ADD PRIMARY KEY (`id`);


ALTER TABLE `brgy_res_info_signatures`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
";
        $db->pdo->exec($SQL);
    }
    public function down(){
        $db = \app\core\Application::$app->db;
        $SQL = "
        DROP TABLE brgy_res_info_signatures;

        ";
        $db->pdo->exec($SQL);

    }
}

















