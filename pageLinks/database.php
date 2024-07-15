<?php 

    $dsn = "mysql:host=localhost;port=3306;dbname=php;";
    $user = 'root';
    $password = '';

    $pdo = new PDO($dsn, $user, $password);
    
    $statement = $pdo->prepare("select * from posts") ;
    $statement->execute();

    $posts=$statement->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($posts);

    foreach ($posts as $post) {
        echo "<div>";
        echo "<h2>". $post["title"]  ."</h2>";
        echo "<p>". $post["content"]  ."</p>";
        echo "</div>";
 
    }
?>