<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<main class=" my-10">
    <div class="profile flex justify-center">
        <div class="resetpassword bg-white w-5/12 mx-5 rounded-lg"> 
            <form action="/password" method="POST" class="my-6">
                <span class="flex justify-center text-3xl font-bold mx-10">Change Password</span>
                <div class="mx-5 my-4">
                    <div class="card my-4">
                        <label for="password"class="text-sm font-medium text-gray-700 mx-5">Current Passowd</label>
                        <input type="password" name="oldpd" id="op" value="<?= isset($_POST['oldpd'])? $_POST['oldpd'] : ""; ?>" autocomplete="given-name" class="mt-1 mx-5 w-11/12 rounded-md border-green-400 shadow-sm focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100" placeholder="........">
                        <span class="mx-5 text-red-500"><?= isset($erorrs['erorr_oldpd'])? $erorrs['erorr_oldpd'] : "" ?></span>
                    </div>
                    <div class="card my-4">
                        <label for="password"class="text-sm font-medium text-gray-700 mx-5">New Password</label>
                        <input type="password" name="newpd" id="np" value="<?= isset($_POST['newpd'])? $_POST['newpd'] : ""; ?>" autocomplete="family-name" class="mt-1 mx-5 w-11/12 rounded-md border-green-400 shadow-sm focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100" placeholder="........">
                        <span class="mx-5 text-red-500"><?= isset($erorrs['erorr_newpd'])? $erorrs['erorr_newpd'] : ""; ?></span>
                    </div>
                    <div class="card my-4">
                        <label for="password" class="text-sm font-medium text-gray-700 mx-5">Comfirm Passowd</label>
                        <input type="password" name="confirmpd" id="cp" value="<?= isset($_POST['confirmpd'])? $_POST['confirmpd'] : ""; ?>" autocomplete="family-name" class="mt-1 mx-5 w-11/12 rounded-md border-green-400 shadow-sm focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100" placeholder="........">
                        <span class="mx-5 text-red-500"><?= isset($erorrs['erorr_confirmpd'])? $erorrs['erorr_confirmpd'] : "" ?></span>
                    </div>
                    <div class="px-4 py-3 sm:px-6">
                        <button type="submit" name="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-2 focus:ring-green-300 font-medium w-full rounded-lg text-sm px-5 mb-2 py-3 px-4 w-full rounded-md">CHANGE</button>
                    </div>
                </div>
            </form>           
        </div>
    </div>
</main>
<?php require "views/partials/footer.php" ?>
