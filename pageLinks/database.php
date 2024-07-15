<?php 

class Database {

    public $connection ;

    public function __construct(){

        $dsn = "mysql:host=localhost;port=3306;dbname=php;";
        $user = 'root';
        $password = '';
    
        $this->connection = new PDO($dsn, $user, $password);
        
    }

    public function query($query){
 
        $statement =  $this->connection->prepare($query) ;
        $statement->execute();
        
        // return $statement->fetchAll(PDO::FETCH_ASSOC);
        return $statement ;
    }
  
}

    $db = new Database();
    $posts =$db->query('select * from posts')->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($posts as $post) {
        echo "<div>";
        echo "<h2>". $post["title"]  ."</h2>";
        echo "<p>". $post["content"]  ."</p>";
        echo "</div>";
    }
?>