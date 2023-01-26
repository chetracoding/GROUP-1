<?php require"views/partials/head.php" ?>
<?php require"views/partials/nav.php" ?>

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full rounded-lg dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Welcome to Consert Ticket
            </h1><br><br>
            <img src="https://app.dfavo.com/assets/login/images/login-image.svg" alt=""><br>
        </div>
        <div class="w-full rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Login in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" action="/login" method="post">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-1 focus:ring-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-red dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Email....">
                        <span class="text-red-600"><?= isset($errors['email'])? $errors['email'] : ""; ?></span>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-1 focus:ring-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                        <span class="text-red-600"><?= isset($errors['password'])? $errors['password'] : ""; ?></span>  
                        <span class="text-red-600"><?= isset($errors['incorrect'])? $errors['incorrect'] : ""; ?></span>  
                    </div>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        <!-- Don't have an account yet? <a href="/register" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register now</a> -->
                        <a href="/resetpassword" class="font-medium text-green-500 hover:underline dark:text-green-500">You forgot password?</a>
                    </p>
                    <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-2 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900">Log in</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Don't have an account yet? <a href="/register" class="font-medium text-green-500 hover:underline dark:text-green-500">Register now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require"views/partials/footer.php" ?>