<?php

use Core\Database ; 

    $heading = "Post";

    $config  = require(base_path('/config.php'));
    $db = new Database($config );


    // dd($_POST);
    $id = $_POST['id'];

    $post= $db->query("select * from posts where id = :id" , [':id' => $id])->findOrFail();

    if(! $post){
        abort();
    }

    $loggedInUser =  1;

    if($post['user_id'] !== $loggedInUser){
        abort(Response::UNAUTHORIZED);
    }
  
   $db->query("delete from posts where id = :id" , [':id' => $id]);

    header("location: /etax/Learn_PHP/pageLinks/posts");
    exit();

    // view('posts/show.view.php', ["heading"=>"Post" , "post" => $post]) ;


?>  