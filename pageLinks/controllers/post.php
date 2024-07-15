<?php

    $heading = "Post";

    require './../Database.php';
    require './../Response.php';

    require './../helper_functions.php';
   

    $config  = require('./../config.php');
    $user = 'root';
    $password = '';
    $db = new Database($config, $user ,   $password );


    $id = $_GET['id'];

    $post= $db->query("select * from posts where id = :id" , [':id' => $id])->fetch(PDO::FETCH_ASSOC);

    if(! $post){
        abort();
    }

    $loggedInUser =  1;

    if($post['user_id'] !== $loggedInUser){
        abort(Response::UNAUTHORIZED);
    }
  
  

    require '../views/post.view.php' ;

?>  