<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<main class="main-register my-20 flex mx-20 bg-slate-900 rounded-lg">
    <div class="w-6/12 flex flex-col items-center justify-center px-6 py-8 xl:p-5 ">
        <img src="assets/register.png" alt="">
    </div>
    <div class="bg-white w-6/12 rounded-r-lg">
        <div class="w-full flex flex-col items-center justify-center px-8 py-8 shadow">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                Create and account
            </h1><br>
            <form class="space-y-4" action="/register" method="POST">
                <div class = "flex space-x-4 ">
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">First Name</label>
                        <input type="text" name="first-name" id="first-name" value="<?= isset($_POST['first-name'])? $_POST['first-name'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg font-medium block w-full p-2.5 focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100" placeholder="first name">
                        <span class="text-red-600"><?= isset($errors['first-name'])? $errors['first-name'] : ""; ?></span>
                    </div>
                    <div>
                        <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Last Name</label>
                        <input type="text" name="last-name" id="last-name" value="<?= isset($_POST['last-name'])? $_POST['last-name'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg font-medium block w-full p-2.5 focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100" placeholder="last name">
                        <span class="text-red-600"><?= isset($errors['last-name'])? $errors['last-name'] : ""; ?></span>
                    </div>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Date of Birth</label>
                    <input type="date" name="date" id="date" value="<?= isset($_POST['date'])? $_POST['date'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg font-medium block w-full p-2.5 focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100" value="2018-07-22">
                    <span class="text-red-600"><?= isset($errors['date'])? $errors['date'] : ""; ?></span>              
                </div>
                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Selecte Your City / Province</label>
                    <select id="address" name="address" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg font-medium block w-full p-2.5 focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100">
                        <option selected disabled>Choose</option>
                        <option value="Phnom Penh" >Phnom Penh</option>
                        <option value="Banteay Meanchey">Banteay Meanchey</option>
                        <option value="Battambang">Battambang</option>
                        <option value="Kampong Cham">Kampong Cham</option>
                        <option value="Kampong Chhnang">Kampong Chhnang</option>
                        <option value="Kampong Speu">Kampong Speu</option>
                        <option value="Kampong Thom">Kampong Thom</option>
                        <option value="Kampot">Kampot</option>
                        <option value="Kandal">Kandal</option>
                        <option value="Koh Kong">Koh Kong</option>
                        <option value="Kratie">Kratie</option>
                        <option value="Mondulkiri">Mondulkiri</option>
                        <option value="Preah Vihear">Preah Vihear</option>
                        <option value="Prey Veng">Prey Veng</option>
                        <option value="Pursat">Pursat</option>
                        <option value="Ratanakiri">Ratanakiri</option>
                        <option value="Siem Reap">Siem Reap</option>
                        <option value="Preah Sihanouk">Preah Sihanouk</option>
                        <option value="Stung Treng">Stung Treng</option>
                        <option value="Svay Rieng">Svay Rieng</option>
                        <option value="Takeo">Takeo</option>
                        <option value="Oddar Meanchey">Oddar Meanchey</option>
                        <option value="Kep">Kep</option>
                        <option value="Pailin">Pailin</option>
                        <option value="Tboung Khmum">Tboung Khmum</option>
                    </select>
                    <span class="text-red-600"><?= isset($errors['address'])? $errors['address'] : ""; ?></span>              
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your email</label>
                    <input type="email" name="email" id="email" value="<?= isset($_POST['email'])? $_POST['email'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg font-medium block w-full p-2.5 focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100" placeholder="Your email">
                    <span class="text-red-600"><?= isset($errors['email'])? $errors['email'] : ""; ?></span>              
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-blac">Password</label>
                    <input type="password" name="password" id="password" value="<?= isset($_POST['password'])? $_POST['password'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg font-medium block w-full p-2.5 focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100"  placeholder="••••••••" >
                    <span class="text-red-600"><?= isset($errors['password'])? $errors['password'] : ""; ?></span>
                </div>
                <div>
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Confirm password</label>
                    <input type="password" name="confirm-password" id="confirm-password" value="<?= isset($_POST['confirm-password'])? $_POST['confirm-password'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg font-medium block w-full p-2.5 focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100"  placeholder="••••••••">
                    <span class="text-red-600"><?= isset($errors['confirm-password'])? $errors['confirm-password'] : ""; ?></span>   
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" aria-describedby="terms" type="checkbox" class="cursor-pointer w-4 h-4 border border-green-400  rounded checked:bg-green-500">
                        </div>
                        <div class="ml-3 text-sm">
                        <label for="terms">Remember me </label>
                        <span class="text-red-600"><?= isset($errors['terms'])? $errors['terms'] : ""; ?></span>   
                    </div>
                </div>
                <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-4 mb- focus:outline-none dark:focus:ring-green-800 w-full">Register</button>
                <p class="text-sm font-light text-black-500">
                    Already have an account? <a href="/login" class="font-medium text-green-600 hover:underline dark:text-green-500">Login here</a>
                </p>
            </form>
        </div>
    </div>
</main>

<script src="views/register/js/register.js"></script>
<?php require "views/partials/footer.php" ?>