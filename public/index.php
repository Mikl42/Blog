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

$route->get('/admin/posts', '\App\Controllers\Admin\PostController@index');
$route->post('/admin/posts/delete/:id','\App\Controllers\Admin\PostController@destroy');
$route->get('/admin/posts/edit/:id','\App\Controllers\Admin\PostController@edit');
$route->post('/admin/posts/edit/:id','\App\Controllers\Admin\PostController@update');

try{
    $route->run();
}catch (NotFoundException $e){
    echo $e->error404();
}
