<?php

    $heading = "Post";

    require './../Database.php';
    require './../helper_functions.php';
   

    $config  = require('./../config.php');
    $user = 'root';
    $password = '';
    $db = new Database($config, $user ,   $password );


    $id = $_GET['id'];

    $post= $db->query("select * from posts where id = :id" , [':id' => $id])->fetch(PDO::FETCH_ASSOC);

    // dd($post);


    require '../views/post.view.php' ;

?>  