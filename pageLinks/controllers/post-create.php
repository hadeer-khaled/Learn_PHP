<?php
$heading = "Create a Post";
require '../helper_functions.php';
require './../Database.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (strlen($_POST['title']) === 0) {
        $errors['title'] = "Title is required";
    }
    if (strlen($_POST['content']) === 0) {
        $errors['content'] = "Content is required";
    }
    if (empty($errors)) {
        $config = require('./../config.php');
        $db = new Database($config);
        $db->query("INSERT INTO posts (title, content, user_id) VALUES (:title, :content, :user_id)", [
            ":title" => $_POST['title'],
            ":content" => $_POST['content'],
            ":user_id" => 1
        ]);
    }
}

require '../views/post-create.view.php';
?>
