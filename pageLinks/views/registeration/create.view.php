
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Craete Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

    <div class="min-h-full">
                
    <?php require base_path('/views/partials/nav.php')?>

    <?php require base_path('/views/partials/header.php') ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <form method = "POST" action ="<?= HOME?>/register">
                    
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">email</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            </div>
                            <input type="text" name="email" id="email" value = "<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"
                                class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        <?php if(isset($errors['email'])): ?>
                             <p class="text-red-500 text-sm"> <?= $errors['email'] ?>  </p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">password</label>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            </div>
                            <input type="password" name="password" id="password" value = "<?= isset($_POST['password']) ? $_POST['password'] : '' ?>"
                            class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
  
                        </div>
                        <?php if(isset($errors['password'])): ?>
                             <p class="text-red-500 text-sm"> <?= $errors['password'] ?>  </p>
                        <?php endif; ?>
                    </div>

                    <button class="btn btn-danger mt-3">Register</button>
                </form>    
        </div>
    </main>
    </div>

</body>
</html>