<?php

use Core\App ; 

    $heading = "Post";

    $db = App::container()->resolve('Core\Database');


    $id = $_GET['id'];

    $post= $db->query("select * from posts where id = :id" , [':id' => $id])->findOrFail();

    if(! $post){
        abort();
    }

    $loggedInUser =  1;

    if($post['user_id'] !== $loggedInUser){
        abort(Response::UNAUTHORIZED);
    }
  
  
    view('posts/show.view.php', ["heading"=>"Post" , "post" => $post]) ;


?>  