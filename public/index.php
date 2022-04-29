<?php 
require_once __DIR__.'/../vendor/autoload.php';
use app\core\Application;


$app = new Application(dirname(__DIR__));


$app->router->get('/', 'home');

$app->router->get('/AddResident', 'addresident');

$app->router->get('/EditResident', 'editresident');

$app->router->post('/AddResident', function(){
    return 'handling submitted data';
});


$app->run();