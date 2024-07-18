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

    $router->get($home.'/posts' ,  '/controllers/posts/index.php')->only("auth");
    $router->get($home.'/post' ,  '/controllers/posts/show.php');

    $router->get($home.'/post-edit' ,  '/controllers/posts/edit.php');
    $router->patch($home.'/post' ,  '/controllers/posts/update.php');
    
    $router->get($home.'/post-create' ,  '/controllers/posts/create.php');
    $router->post($home.'/posts' ,  '/controllers/posts/store.php');

    $router->delete($home.'/post' ,  '/controllers/posts/destroy.php');
    
    $router->get($home.'/register' ,  '/controllers/registeration/create.php')->only("guest");
    $router->post($home.'/register' ,  '/controllers/registeration/store.php');

?>