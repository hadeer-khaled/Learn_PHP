<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

    <div class="min-h-full">
        
    <?php require base_path('/views/partials/nav.php')?>

    <?php require base_path('/views/partials/header.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php  foreach($post as $key =>$value): ?>
            <div>
                    <h2> <?php echo $key. " : "  .$value ?></h2>
            </div>
            <form>
                <input type ="hidden" name ="_method" value="DELETE"/>
                <input type ="hidden" name ="delete" value="<?= $post['id']?>"/>
                <button class="text-red-500 text-sm">Delete</button>
            </form>
        <?php endforeach; ?>
        </div>
    </main>
    </div>

</body>
</html>