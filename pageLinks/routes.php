<?php

$home = '/etax/Learn_PHP/pageLinks' ;
    // return  [
    //     "$home/" =>  'controllers/index.php',
    //     "$home/about" =>  'controllers/about.php',
    //     "$home/contact" =>  'controllers/contact.php',
    //     "$home/posts" =>  'controllers/posts/index.php',
    //     "$home/post" =>  'controllers/posts/show.php',
    //     "$home/post-create" =>  'controllers/posts/create.php',
    // ];

    $router->get($home.'/' ,  '/controllers/index.php');
    $router->get($home.'/about' ,  '/controllers/about.php');
    $router->get($home.'/contact' ,  '/controllers/contact.php');
    $router->get($home.'/posts' ,  '/controllers/posts/index.php');
    $router->get($home.'/post' ,  '/controllers/posts/show.php');
    $router->get($home.'/post-create' ,  '/controllers/posts/create.php');
    $router->post($home.'/post-create' ,  '/controllers/posts/create.php');
    $router->delete($home.'/post' ,  '/controllers/posts/destroy.php');


?>