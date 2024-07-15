<?php

    $heading = "Posts";

    require './../Database.php';
    require './../helper_functions.php';
   

    $config  = require('./../config.php');
    $user = 'root';
    $password = '';
    $db = new Database($config, $user ,   $password );

    $posts= $db->query("select * from posts where user_id = 1")->fetchAll(PDO::FETCH_ASSOC);

    require '../views/posts.view.php' ;

?>