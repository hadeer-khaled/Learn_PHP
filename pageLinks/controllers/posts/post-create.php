<?php
$heading = "Create a Post";
require(base_path('/Validator.php'));


$errors = [];

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (! Validator::string($_POST['title'] , 1 , 100)) {
        $errors['title'] = "Title is required and cannot be more than 100 characters ";
    }
    if (! Validator::string($_POST['content'] , 1 , 100)) {
        $errors['content'] = "Content is required and cannot be more than 1000 characters ";
    }

    if (empty($errors)) {
        $config  = require(base_path('/config.php'));
        $db = new Database($config);
        $db->query("INSERT INTO posts (title, content, user_id) VALUES (:title, :content, :user_id)", [
            ":title" => $_POST['title'],
            ":content" => $_POST['content'],
            ":user_id" => 1
        ]);
    }
}

require  base_path('/views/posts/post-create.view.php') ;
?>
