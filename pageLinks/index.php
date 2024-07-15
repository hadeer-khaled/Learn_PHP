<?php

require 'helper_functions.php';
require 'database.php';

// require 'routes.php';

    $BASE_URL = "http://localhost/etax/Learn_PHP/pageLinks/";
    // define('BASE_URL', '/etax/Learn_PHP/pageLinks/');


    $page =  parse_url(($_SERVER['REQUEST_URI']))["path"];
    echo  $page;


    if($page === "/etax/Learn_PHP/pageLinks/"){
         header('location:./controllers/index.php');
    }
    else if($page === "/etax/Learn_PHP/pageLinks/about"){
        require './controllers/about.php';
    }
    else if($page === "/etax/Learn_PHP/pageLinks/contact"){
        require './controllers/contact.php';
    }

?>