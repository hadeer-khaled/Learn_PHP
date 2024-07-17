<?php
define('BASE_PATH', realpath(__DIR__ . "/../"));

require BASE_PATH . '/Core/helper-functions.php';
// require BASE_PATH . '/Database.php';
// require BASE_PATH . '/Response.php';

spl_autoload_register(function($class) {
    // dd($class) ; //Core\Database
    require base_path("/" . $class .".php");
});

require BASE_PATH . '/router.php';


?>
