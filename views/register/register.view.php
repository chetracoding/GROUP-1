<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<main class="my-8 flex mx-20">
    <div class="flex flex-col items-center justify-center px-6 py-8 xl:p-0 ">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                Welcome to Consert Ticket
            </h1><br>
            <p>Discover millions of events,</p><br><br>
            <img src="https://app.dfavo.com/assets/login/images/login-image.svg" alt="">
    </div>
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md  ">
        <br>
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                Create and account
            </h1><br>
            <form class="space-y-4 " action="/register" method="POST">
                <div class = "flex space-x-4 ">
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">First Name</label>
                        <input type="text" name="first-name" id="first-name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block p-2.5   dark:text-black" placeholder="first name">
                        <span class="text-red-600"><?= isset($errors['first-name'])? $errors['first-name'] : ""; ?></span>
                    </div>
                    <div>
                        <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                        <input type="text" name="last-name" id="last-name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5  dark:text-black " placeholder="last name">
                        <span class="text-red-600"><?= isset($errors['last-name'])? $errors['last-name'] : ""; ?></span>
                    </div>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5   dark:text-black " placeholder="Your email">
                    <span class="text-red-600"><?= isset($errors['email'])? $errors['email'] : ""; ?></span>              
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blac">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:text-black">
                    <span class="text-red-600"><?= isset($errors['password'])? $errors['password'] : ""; ?></span>
                </div>
                <div>
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Confirm password</label>
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5  dark:text-black ">
                    <span class="text-red-600"><?= isset($errors['confirm-password'])? $errors['confirm-password'] : ""; ?></span>   
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3   ">
                        </div>
                        <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-black-500 dark:text-black-300">I accept me </label>
                        <span class="text-red-600"><?= isset($errors['terms'])? $errors['terms'] : ""; ?></span>   
                    </div>
                </div>
                <button id="submit" type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-4 mb- dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800 w-full">Register</button>
                <p class="text-sm font-light text-black-500 dark:text-black-400">
                    Already have an account? <a href="/login" class="font-medium text-green-600 hover:underline dark:text-green-500">Login here</a>
                </p>
            </form>
    </div>
</main>

<?php require "views/partials/footer.php" ?>