<?php 
$books = [
    ["author" => "Hadeer", "genre" => "Comedy"],
    ["author" => "Rahma", "genre" => "Romance"],
    ["author" => "Hadeer", "genre" => "Dystopian"],
    ["author" => "J.K. Rowling", "genre" => "Fantasy"],
    ["author" => "Hadeer", "genre" => "Mystery"],
    ["author" => "Rahma", "genre" => "Adventure"],
];

function custom_filter($items, $fn) {
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

$Books = custom_filter($books, function($book) {
    return $book['author'] === 'Rahma';
});

require './index.view.php';
?>
