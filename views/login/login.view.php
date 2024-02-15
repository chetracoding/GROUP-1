<?php require'views/partials/head.php' ?>
<?php require'views/partials/nav.php' ?>

<main class="my-20 flex justify-center">
    <div class="login-contanier w-10/12 flex bg-slate-900 rounded-lg">
        <div class="w-3/6 flex justify-center items-center">
            <img class="w-3/5" src="assets/login.png" alt="">
        </div>
        <div class="bg-white w-3/6 rounded-r-lg">
            <div class="p-8 space-y-6 md:space-y-10 sm:p-15 mx-14">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Login in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" action="/login" method="post">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100 font-medium block w-full p-2.5" placeholder="Email...." value="<?= isset($_POST['email'])? $_POST['email'] : ""; ?>">
                        <span class="text-red-600"><?= isset($errors['email'])? $errors['email'] : ""; ?></span>
                        <span class="text-red-600"><?= isset($errors['incorrect-email'])? $errors['incorrect-email'] : ""; ?></span>  
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100 font-medium block w-full p-2.5" placeholder="••••••••" value="<?= isset($_POST['password'])? $_POST['password'] : ""; ?>">
                        <span class="text-red-600"><?= isset($errors['password'])? $errors['password'] : ""; ?></span>  
                        <span class="text-red-600"><?= isset($errors['incorrect-password'])? $errors['incorrect-password'] : ""; ?></span>   
                    </div>
                    <p class="text-sm font-light text-gray-500">
                        <a href="/forgotpassword" class="font-medium text-green-500 hover:underline">Did you forgot password ?</a>
                    </p>
                    <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-2 focus:ring-green-300 font-medium w-full rounded-lg text-sm px-5 py-2.5 mb-2">Log in</button>
                    <p class="text-sm font-light text-gray-500">
                        Don't have an account yet? <a href="/register" class="font-medium text-green-500 hover:underline">Register now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require'views/partials/footer.php' ?>