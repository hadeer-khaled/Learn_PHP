<?php
define('BASE_PATH', realpath(__DIR__ . "/../"));

require BASE_PATH . '/helper-functions.php';
// require BASE_PATH . '/Database.php';
// require BASE_PATH . '/Response.php';

spl_autoload_register(function($class) {
    require base_path("/" . $class .".php");
});

require BASE_PATH . '/router.php';


?>
