<?php 
    require 'views/partials/head.php'; 
    require 'views/partials/nav.seller.php'; 
    require 'views/partials/aside.seller.php'; 
?>
<main class="ml-48 mt-14 flex justify-center items-center">
    <div class="main-register bg-white sm:rounded-lg my-8 w-3/6">
        <div class="w-full flex flex-col items-center justify-center px-8 py-8 shadow">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                Edit show
            </h1><br>
            <form class="w-full space-y-4" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Your title</label>
                    <input type="title" name="title" id="title" value="<?=  $editShow['title'] ?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
                    <span class="text-red-600"><?= isset($errors['title'])? $errors['title'] : ""; ?></span>              
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Your description</label>
                    <textarea id="description" name="description"  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-green-400 focus:ring-blue-500 focus:border-blue-500 " ><?= $editShow['description']?></textarea>
                    <span class="text-red-600"><?= isset($errors['description'])? $errors['description'] : ""; ?></span>              
                </div>
                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 ">Your image</label>
                    <div class="flex gap-2 items-center">
                        <input type="file" accept = "image/png, image/jpg, image/jpeg" name="image" id="image" value="<?= $editShow['image']?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
                        <img class=" rounded w-20 h-20" src="../../assets/uploaded/<?php echo $editShow['image']; ?>" alt="">
                    </div>
                </div>
                <div>
                    <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 ">Your duration</label>
                    <input type="time" name="duration" id="duration" value="<?= $editShow['duration']?>"  class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
                    <span class="text-red-600"><?= isset($errors['duration'])? $errors['duration'] : ""; ?></span>   
                </div>

                <div>
                    <label for="video_trailer" class="block mb-2 text-sm font-medium text-gray-900 ">Your video_trailer</label>
                    <textarea id="video_trailer" name="video_trailer" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-green-400 focus:ring-blue-500 focus:border-blue-500 "><?= $editShow['video_trailer']?></textarea>
                    <span class="text-red-600"><?= isset($errors['video_trailer'])? $errors['video_trailer'] : ""; ?></span>              
                </div>

                <div>
                    <label for="action" class="block mb-2 text-sm font-medium text-gray-900 ">Action</label>
                    <input type="text" name="action" id="action" value="<?= $editShow['action']?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
                    <span class="text-red-600"><?= isset($errors['action'])? $errors['action'] : ""; ?></span>
                </div>
                <div>
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 ">Price</label>
                    <input type="number" step="0.01" name="price" id="price" value="<?=$editShow['price']?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5"placeholder="price">
                    <span class="text-red-600"><?= isset($errors['price'])? $errors['price'] : ""; ?></span>   
                </div>
                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Address show</label>
                    <select id="address" name="address" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
                        <?php foreach($getNameVenues as $name) : ?>
                            <?php if ($name["venue_id"] == $editShow["venue_id"]) : ?>
                                <option selected value="<?= $name["venue_id"] ?>"> <?= $name["name"] ?></option>
                            <?php else: ?>
                                <option value="<?= $name["venue_id"] ?>" ><?= $name["name"] ?></option>
                            <?php endif; ?>
                        <?php endforeach?>
                    </select>
                    <span class="text-red-600"><?= isset($errors['address'])? $errors['address'] : ""; ?></span>              
                </div>
                <div>
                    <label for="types" class="block mb-2 text-sm font-medium text-gray-900 ">types show</label>
                    <select id="types" name="types" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
                        <?php foreach($getNameTypes as $name) : ?>
                            <?php if ($name["type_id"] == $editShow["type_id"]) : ?>
                                <option selected value="<?= $name["type_id"] ?>"> <?= $name["name"] ?></option>
                            <?php else: ?>
                                <option value="<?= $name["type_id"] ?>" ><?= $name["name"] ?></option>
                            <?php endif; ?>
                        <?php endforeach;?>
                    </select>
                    <span class="text-red-600"><?= isset($errors['types'])? $errors['types'] : ""; ?></span>              
                </div>
                <button type="submit" name = "upload" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-4 mb- focus:outline-none w-full">Edit here</button>
            </form>
        </div>
    </div>
</main>
<?php require 'views/partials/footer.seller.php'; ?>