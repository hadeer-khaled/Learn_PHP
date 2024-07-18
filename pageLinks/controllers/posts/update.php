<?php
    use Core\Validator ; 
    use Core\App ; 

    $db = App::container()->resolve('Core\Database');

    $id = $_POST['id'];

    $post= $db->query("select * from posts where id = :id" , [':id' => $id])->findOrFail();

    if(! $post){
        abort();
    }

    $loggedInUser =  1;

    if($post['user_id'] !== $loggedInUser){
        abort(Response::UNAUTHORIZED);
    }


    $errors = [];


    if (! Validator::string($_POST['title'] , 1 , 100)) {
        $errors['title'] = "Title is required and cannot be more than 100 characters ";
    }
    if (! Validator::string($_POST['content'] , 1 , 100)) {
        $errors['content'] = "Content is required and cannot be more than 1000 characters ";
    }

    if (!empty($errors)) {
        view('posts/edit.view.php', ["heading"=>"Edit a post", "errors"=> $errors , "post"=> $post]) ;

    }
    if (empty($errors)) {
        $db->query("UPDATE posts set title = :title   where id = :id", [
            ":title" => $_POST['title'],
            ":id" => $_POST['id']
        ]);
        header("location: /etax/Learn_PHP/pageLinks/posts");
        exit();
    }



?>