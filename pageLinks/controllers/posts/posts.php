<?php

    $heading = "Posts";


    $config  = require(base_path('/config.php'));
    $user = 'root';
    $password = '';
    $db = new Database($config, $user ,   $password );

    $posts= $db->query("select * from posts where user_id = 1")->get();

    require  base_path('/views/posts/posts.view.php') ;

?>