<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<main class=" my-10">
    <div class="profile flex justify-center">
        <div class="detailperson px-10 bg-slate-900 rounded-lg">
            <div class="profile flex justify-center">
                <i class=" text-white fa-regular fa-circle-user text-7xl my-6"></i>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-bold uppercase text-white"><?= $profile['first_name']?> <?= $profile['last_name']?></span>
                <span class="gmail mx-5 text-white"><?= $profile['email']?></span>        
            </div>
        </div>
        <div class="detailperson bg-white w-5/12 mx-5 rounded-lg"> 
            <form action=" #" method="POST" class="my-6">
                <span class="text-3xl font-bold mx-10 flex justify-center">Personal Details</span>
                <div class="mx-5 my-4">
                    <div class="card my-4">
                        <label for="first-name"class="text-sm font-medium text-gray-700 mx-5">First name</label>
                        <input type="text" disabled name="first-name" id="first-name" autocomplete="given-name" value="<?= $profile['first_name']?>" class="mt-1 mx-5 w-11/12 rounded-md border-green-400 shadow-sm focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100">
                    </div>
                    <div class="card my-4">
                        <label for="last-name" class="text-sm font-medium text-gray-700 mx-5">Last name</label>
                        <input type="text" disabled name="last-name" id="last-name" autocomplete="family-name" value="<?= $profile['last_name']?>" class="mt-1  mx-5 w-11/12 rounded-md border-green-400 shadow-sm focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100">
                    </div>
                    <div class="card my-4">
                        <label for="email" class="text-sm font-medium text-gray-700 mx-5">Email</label>
                        <input type="email" disabled name="email" id="email" autocomplete="family-name" value="<?= $profile['email']?>" class="mt-1  mx-5 w-11/12 rounded-md border-green-400 shadow-sm focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100">
                    </div>
                    <div class="card my-4">
                        <label for="date-of-bird" class="text-sm font-medium text-gray-700 mx-5">Date of bird</label>
                        <input type="text" disabled name="date-of-bird" id="date-of-bird" autocomplete="family-name" value="<?= $profile['date_of_bird']?>" class="mt-1  mx-5 w-11/12 rounded-md border-green-400 shadow-sm focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100">
                    </div>
                    <div class="card my-4">
                        <label for="address" class="text-sm font-medium text-gray-700 mx-5">Address</label>
                        <input type="text" disabled name="address" id="address" autocomplete="family-name" value="<?= $profile['address']?>" class="mt-1  mx-5 w-11/12 rounded-md border-green-400 shadow-sm focus:ring-1 focus:ring-green-400 focus:outline-none focus:border-green-100">
                    </div>
                    <div class="card my-4 mx-5">
                        <p class="text-sm font-light text-white">
                            <a href="/password" class="flex font-medium text-green-500 hover:underline">Change my password?</a>
                        </p>
                    </div>
                </div>
            </form>           
        </div>
    </div>
</main>
<?php require "views/partials/footer.php" ?>