<?php
    use Core\App ; 

    $heading = "Posts";

    $db = App::container()->resolve('Core\Database');

    $config  = require(base_path('/config.php'));
    $user = 'root';
    $password = '';
    // $db = new Database($config, $user ,   $password );

    $posts= $db->query("select * from posts where user_id = 1")->get();

    view('posts/index.view.php', ["heading"=>"Posts","posts"=> $posts]) ;


?>