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

    <?php
        $currentDir = __DIR__;
        $navPath = $currentDir . '\partials\nav.php';
        $headerPath = $currentDir . '\partials\header.php';
    ?>
    <?php require($navPath) ?>

    <?php require($headerPath) ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                Hello  from contact page      
        </div>
    </main>
    </div>

</body>
</html>