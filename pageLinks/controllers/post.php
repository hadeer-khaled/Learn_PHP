<?php

    $heading = "Post";

    require './../Database.php';
    require './../Response.php';

    require './../helper_functions.php';
   

    $config  = require('./../config.php');
    $db = new Database($config );


    $id = $_GET['id'];

    $post= $db->query("select * from posts where id = :id" , [':id' => $id])->findOrFail();

    if(! $post){
        abort();
    }

    $loggedInUser =  1;

    if($post['user_id'] !== $loggedInUser){
        abort(Response::UNAUTHORIZED);
    }
  
  

    require '../views/post.view.php' ;

?>  