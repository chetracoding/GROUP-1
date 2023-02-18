<?php 
    require 'views/partials/head.php'; 
    require 'views/partials/nav.seller.php'; 
    require 'views/partials/aside.seller.php'; 
?>
<main class="ml-48 mt-14 flex justify-center items-center">
    <div class="bg-white sm:rounded-lg my-8 w-3/6 main-register">
        <div class="w-full flex flex-col items-center justify-center px-8 py-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                Edit venue
            </h1><br>
            <form class="w-full space-y-4 " method="POST" enctype="multipart/form-data">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Your venue name</label>
                    <input type="name" name="name" id="name" value="<?= $editVenue['name']?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
                    <span class="text-red-600"><?= isset($errors['name'])? $errors['name'] : ""; ?></span>              
                </div>
                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Your address</label>
                    <textarea id="address" name="address"  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-green-400 focus:ring-blue-500 focus:border-blue-500 "><?= $editVenue["venue_address"]?></textarea>
                    <span class="text-red-600"><?= isset($errors['address'])? $errors['address'] : ""; ?></span>              
                </div>
                <div>
                    <label for="row-letter" class="block mb-2 text-sm font-medium text-gray-900 ">Seat row</label>
                    <select id="row-letter" name="row_letter" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">

                        <?php $rowLetters = range('A', 'Z');
                        foreach($rowLetters as $letter) : 

                            if ($editVenue["seat_row"] == $letter) :?>
                                <option selected value="<?= $letter ?>" ><?= $letter ?></option>
                            <?php else: ?>
                                <option value="<?= $letter ?>" ><?= $letter ?></option>
                            <?php endif; ?>

                        <?php endforeach;?>
                    </select>
                </div>
                <div>
                    <label for="number-column" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Seat columns</label>
                    <input type="number" name="number_column" id="number-column" value="<?= $editVenue["number_column"]?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" placeholder="Your number columns">
                    <span class="text-red-600"><?= isset($errors['number_column'])? $errors['number_column'] : ""; ?></span>              
                </div>

                <button type="submit" name = "upload" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-4 mb- focus:outline-none dark:focus:ring-green-800 w-full">Edit here</button>
            </form>
        </div>
    </div>
</main>

<?php require 'views/partials/footer.seller.php'; ?>