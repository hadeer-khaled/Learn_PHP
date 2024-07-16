<?php

    $heading = "Post";

    $config  = require(base_path('/config.php'));
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
  
  
    require  base_path('/views/posts/post.view.php') ;

?>  