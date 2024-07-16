<?php

$home = '/etax/Learn_PHP/pageLinks' ;


$uri = parse_url($_SERVER['REQUEST_URI'])['path'] ; 
    
$routes = [
    "$home/" =>  'controllers/index.php',
    "$home/about" =>  'controllers/about.php',
    "$home/contact" =>  'controllers/contact.php',
    "$home/posts" =>  'controllers/posts/index.php',
    "$home/post" =>  'controllers/posts/show.php',
    "$home/post-create" =>  'controllers/posts/create.php',
];

routeToController($uri , $routes );

function routeToController($uri , $routes ){
    if(array_key_exists($uri  ,$routes )){
        require $routes[$uri];
    }else{
        abort();
    }
}
?>