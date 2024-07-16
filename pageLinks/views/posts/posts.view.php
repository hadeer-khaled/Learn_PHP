<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

    <div class="min-h-full">
    <?php $home = '/etax/Learn_PHP/pageLinks' ;?>
        
        
    <?php require base_path('/views/partials/nav.php')?>

    <?php require base_path('/views/partials/header.php') ?>
 
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <a class="btn" href="<?= $home ?>/post-create">
                Create a Post
        </a>
        <?php  foreach($posts as $post): ?>
            <div>
                <a href="<?= $home?>/post?id=<?= $post['id']?>" class="text-blue-500 hover:underline">
                    <h2> <?= htmlspecialchars( $post['title'] )?></h2>
                </a>
            </div>
        <?php endforeach; ?>
        </div>
    </main>
    </div>

</body>
</html>