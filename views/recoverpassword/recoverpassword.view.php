<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<div class="flex justify-center align-center my-8 flex">
    <div class="w-2/5 md:space-y-8 sm:p-15 mx-14 mb- bg-white rounded-lg m-12 p-8 main-register">
        <form action="/recoverpassword" method="POST" class="space-y-4 md:space-y-6">
            <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-center">
               New Password
            </h1>
            <p class="text-center">Please create a new password for your account</p>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">New Password</label>
            <div>
                <input type="password" name="new-password" id="new-password" value="<?= isset($_POST['new-password'])? $_POST['new-password'] : ""?>" placeholder="••••••••••••" class="bg-gray-50 border border-green-400 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5 dark:focus:ring-green-500 dark:focus:border-green-300">
                <span class="text-red-600"><?= isset($errors['new_password'])? $errors['new_password']: ""; ?></span>
            </div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
            <div>
                <input type="password" name="confirm-password" id="password" value="<?= isset($_POST['confirm-password'])? $_POST['confirm-password'] : ""?>" placeholder="••••••••••••" class="bg-gray-50 border border-green-400 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5 dark:focus:ring-green-500 dark:focus:border-green-300">
                <span class="text-red-600"><?= isset($errors['confirm_password'])? $errors['confirm_password'] : ""; ?></span>   
            </div>
            <button type="submit" class="focus:outline-none text-white bg-green-500 hover:bg-green-800 focus:ring-2 focus:ring-green-300 font-medium w-full rounded-lg text-sm px-5 py-2.5 mb-2">Change</button>
        </form>
    </div>
</div>

<?php require "views/partials/footer.php" ?>