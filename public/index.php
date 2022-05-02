<?php 
require_once __DIR__.'/../vendor/autoload.php';
use app\controllers\SiteController;
use app\controllers\AuthController;
use app\core\Application;


$app = new Application(dirname(__DIR__));


$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/EditResident', [SiteController::class, 'EditResident']);
$app->router->get('/AddResident', [SiteController::class, 'AddResident']);
$app->router->post('/AddResident', [SiteController::class, 'AddResident']);

$app->router->get('/login', [AuthController::class, 'login']);

$app->router->post('/login', [AuthController::class, 'login']);



$app->run();