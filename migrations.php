<?php


use app\controllers\SiteController;
use app\controllers\AuthController;
use app\core\Application;

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'db' => [
        'servername' => $_ENV['DB_SERVER_NAME'],
        'username' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ],
];

$app = new Application(__DIR__, $config);
$app->db->applyMigration();