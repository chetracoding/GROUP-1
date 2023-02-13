<?php 
    require 'views/partials/head.php'; 
    require 'views/partials/nav.seller.php'; 
    require 'views/partials/aside.seller.php'; 
?>
<main class="main-register m-auto w-5/12 ">
    <div class="bg-white w-full ">
        <div class="w-full flex flex-col items-center justify-center px-8 py-8 shadow mt-10">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                Create new show
            </h1><br>
            <form class="w-full space-y-4" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your title</label>
                    <input type="title" name="title" id="title" value="<?= isset($_POST['title'])? $_POST['title'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" placeholder="Your title">
                    <span class="text-red-600"><?= isset($errors['title'])? $errors['title'] : ""; ?></span>              
                </div>
                <div>
                    
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your description</label>
                    <textarea id="description" name="description"  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-green-400 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your description here..."><?= isset($_POST['description'])? $_POST['description'] : ""?></textarea>
                    <span class="text-red-600"><?= isset($errors['description'])? $errors['description'] : ""; ?></span>              
                </div>
                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your image</label>
                    <input type="file" accept = "image/png, image/jpg, image/jpeg" name="image" id="image" value="<?= isset($_POST['image'])? $_POST['image'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" placeholder="Your image">
                    <span class="text-red-600"><?= isset($errors['image'])? $errors['image'] : ""; ?></span>   
                </div>
                <div>
                    <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your duration</label>
                    <input type="time" name="duration" id="duration" value="<?= isset($_POST['duration'])? $_POST['duration'] : ""?>"  class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" placeholder="Your duration EX 00:00:00">
                    <span class="text-red-600"><?= isset($errors['duration'])? $errors['duration'] : ""; ?></span>   
                </div>

                <div>
                    <label for="video_trailer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your video_trailer</label>
                    <textarea id="video_trailer" name="video_trailer" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-green-400 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Put your video_trailer here..."><?= isset($_POST['video_trailer'])? $_POST['video_trailer'] : ""?></textarea>
                    <span class="text-red-600"><?= isset($errors['video_trailer'])? $errors['video_trailer'] : ""; ?></span>              
                </div>

                <div class = "w-full flex space-x-4 justify-between">
                    <div>
                        <label for="action" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Action</label>
                        <input type="text" name="action" id="action" value="<?= isset($_POST['action'])? $_POST['action'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" placeholder="Action">
                        <span class="text-red-600"><?= isset($errors['action'])? $errors['action'] : ""; ?></span>
                    </div>
                    <div>
                        <label for="number_ticket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Number of ticket</label>
                        <input type="number" name="number_tickets" id="number_tickets" value="<?= isset($_POST['number_tickets'])? $_POST['number_tickets'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" placeholder="Number ticket..">
                        <span class="text-red-600"><?= isset($errors['number_tickets'])? $errors['number_tickets'] : ""; ?></span>
                    </div>
                </div>
                <div>
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Price</label>
                    <input type="number" name="price" id="price" value="<?= isset($_POST['price'])? $_POST['price'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5"placeholder="price">
                    <span class="text-red-600"><?= isset($errors['price'])? $errors['price'] : ""; ?></span>   
                </div>
                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Address show</label>
                    <select id="address" name="address" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
                        <option selected disabled>Choose</option>
                        <?php foreach($getNameVenues as $name) : ?>
                        <option value="<?= $name["venue_id"] ?>" ><?= $name["name"] ?></option>
                        <?php endforeach;?>
                    </select>
                    <span class="text-red-600"><?= isset($errors['address'])? $errors['address'] : ""; ?></span>              
                </div>
                <div>
                    <label for="types" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">types show</label>
                    <select id="types" name="types" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
                        <option selected disabled>Choose</option>
                        <?php foreach($getNameTypes as $name) : ?>
                        <option value="<?= $name["type_id"] ?>" ><?= $name["name"] ?></option>
                        <?php endforeach;?>
                    </select>
                    <span class="text-red-600"><?= isset($errors['types'])? $errors['types'] : ""; ?></span>              
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-green-400  rounded  focus:ring-3   ">
                        </div>
                        <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-black-500 dark:text-black-300">Remember me </label>
                        <span class="text-red-600"><?= isset($errors['terms'])? $errors['terms'] : ""; ?></span>   
                    </div>
                </div>
                <button type="submit" name = "upload" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-4 mb- focus:outline-none dark:focus:ring-green-800 w-full">Add here</button>
            </form>
        </div>
    </div>
</main>
<script src="views/seller/js/seller.js"></script>
<?php require 'views/partials/footer.seller.php'; ?>