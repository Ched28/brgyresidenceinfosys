<?php 

use app\controllers\SiteController;
use app\controllers\AuthController;
use app\core\Application;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'EmployeeClass' => \app\models\AddEmployee::class,
    'db' => [
        'servername' => $_ENV['DB_SERVER_NAME'],
        'username' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ],
    ];

$app = new Application(dirname(__DIR__), $config);


$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/EditResident', [AuthController::class, 'EditResident']);
$app->router->get('/AddResident', [AuthController::class, 'AddResident']);
$app->router->post('/AddResident', [AuthController::class, 'AddResident']);
$app->router->get('/AddEmployee', [AuthController::class, 'AddEmployee']);
$app->router->post('/AddEmployee', [AuthController::class, 'AddEmployee']);

$app->router->get('/login', [AuthController::class, 'login']);

$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/logout', [AuthController::class, 'logout']);

$app->router->get('/profile', [AuthController::class, 'profile']);
$app->router->get('/profile/{id:\d+}/{username}', [AuthController::class, 'profile']);
$app->run();