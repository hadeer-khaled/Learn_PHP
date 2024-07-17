<?php

use Core\Router ;

define('BASE_PATH', realpath(__DIR__ . "/../"));

define('HOME','/etax/Learn_PHP/pageLinks');

require BASE_PATH . '/Core/helper-functions.php';

spl_autoload_register(function($class) {
    require base_path("/" . $class .".php");
});

require base_path("/bootstrap.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'] ; 
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'] ;


$router = new Router();
$routes = require base_path("/routes.php");

$router->route($uri  , $method);


?>
