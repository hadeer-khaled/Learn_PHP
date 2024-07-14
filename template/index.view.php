<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <?php foreach ($Books as $book): ?>
                <li> Author: <?=  $book["author"] ?> | Genre: <?= $book["genre"] ?> </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
