<?php 
require_once __DIR__.'/../vendor/autoload.php';
use app\core\Application;


$app = new Application();


$app->router->get('/', function(){
    return 'Hello World!';
});

$app->router->get('/Contact', 'contact');
$app->router->get('/Users', 'users');





$app->run();