<?php
define('BASE_PATH', realpath(__DIR__ . "/../"));

require BASE_PATH . '/core/helper-functions.php';
// require BASE_PATH . '/Database.php';
// require BASE_PATH . '/Response.php';

spl_autoload_register(function($class) {
    require base_path("/core/" . $class .".php");
});

require BASE_PATH . '/router.php';


?>
