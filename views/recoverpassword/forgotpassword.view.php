<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<div class="flex justify-center align-center my-8">
    <div class="w-2/5 md:space-y-8 sm:p-15 mx-14 bg-white p-8 rounded-lg m-20 main-register">
        <form action="/forgotpassword" method="POST" class="space-y-4 md:space-y-6">
            <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-center">
                Forgot Password
            </h1>
            <label for="email" class="text-center block mb-2 text-sm font-medium text-gray-900">Please enter email address and we'll send you PIN CODE</label>
            <div>
                <input type="email" name="email" value="<?= isset($_POST['email'])? $_POST['email'] : "";?>" id="email" placeholder="Enter your email address" class="bg-gray-50 border border-green-600 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
                <span class="text-red-600"><?= isset($errorEmail)? $errorEmail : "";?></span>
            </div>
            <button type="submit" class="focus:outline-none text-white bg-green-500 hover:bg-green-800 focus:ring-2 focus:ring-green-300 font-medium w-full rounded-lg text-sm px-5 py-2.5 mb-2">Continue</button>
        </form>
    </div>
</div>

<?php require "views/partials/footer.php" ?>