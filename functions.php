<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
        <?php
            $books = [
                ["author" => "Hadeer", "genre" => "Comedy"],
                ["author" => "Rahma", "genre" => "Romance"],
                ["author" => "Hadeer", "genre" => "Dystopian"],
                ["author" => "J.K. Rowling", "genre" => "Fantasy"],
                ["author" => "Hadeer", "genre" => "Mystery"],
                ["author" => "Rahma", "genre" => "Adventure"],
            ];

            function filter($items , $key , $value){
                $filteredItems = [];
                foreach ($items as $item) {
                    if($item[$key] === $value){
                        $filteredItems[]=  $item;
                    }
                }
                return  $filteredItems;
            }
            $filteredBooks = filter($books , "author" , 'Hadeer');
        ?>
        <div>
            <ul>
                <?php foreach($filteredBooks as $book ):?>
                    <li> Author: <?= $book["author"]  ?> |Genre: <?= $book["genre"]  ?> <li>
                <?php endforeach ;?>
            </ul>
        </div>

        <?php 
          function custom_filter($items , $fn){
            $filteredItems = [];
            foreach ($items as $item) {
                if($fn($item)){
                    $filteredItems[]=  $item;
                }
            }
            return  $filteredItems;
        }
        $filteredBooks = custom_filter($books , function($book){return $book['author'] === 'Rahma';});

        ?>
        <div>
            <ul>
                <?php foreach($filteredBooks as $book ):?>
                    <li> Author: <?= $book["author"]  ?> |Genre: <?= $book["genre"]  ?> <li>
                <?php endforeach ;?>
            </ul>
        </div>

     

</body>
</html>
