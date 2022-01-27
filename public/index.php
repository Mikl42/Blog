<?php

use App\Exceptions\NotFoundException;
use Router\Router;

require '../vendor/autoload.php';

define('VIEWS' , dirname(__DIR__). DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']). DIRECTORY_SEPARATOR);

define('DB_NAME', 'monsite');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');

$route = new Router($_GET['url']);

$route->get('/', 'App\Controllers\BlogController@welcome');
$route->get('/posts', 'App\Controllers\BlogController@index');
$route->get('/posts/:id', 'App\Controllers\BlogController@show');
$route->get('/tags/:id', 'App\Controllers\BlogController@tag');

try{
    $route->run();
}catch (NotFoundException $e){
    echo $e->getMessage();
}
