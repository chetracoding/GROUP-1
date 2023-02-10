<?php 
    require 'views/partials/head.php'; 
    require 'views/partials/nav.seller.php'; 
    require 'views/partials/aside.seller.php'; 
?>

<section class="w-full ">
    <div id="main" class="w-full main-content flex1 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="flex justify-between items-center w-full pl-6 pt-6 pr-6">
            <span class="text-slate-700 rounded-md text-lg font-medium">List of Venues</span>
            <a class="text-center flex items-center text-white-600 rounded-full px-8 py-2 bg-blue-600" href="/seller/venue/createVenue">
                <i class="fa-sharp fa-solid fa-location-plus fa-2x fa-inverse"></i>
            </a>
        </div>

        <div class="w-full gap-4">
        <?php foreach($venues as $venue) :?>
            <div class="w-full px-6 py-3">
                <div class="bg-gray-800 from-blue-200 to-blue-100 border-b-4 border-blue-600 shadow-xl p-5">
                    <div class="text-slate-400 flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-blue-600"><i class="fa-solid fa-camera-movie fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="w-1/3 flex flex-col">
                            <span>Name: </span>
                            <span class="font-bold"><?= $venue['name']; ?></span>
                        </div>
                        <div class="w-1/2 ml-2 flex flex-col">
                            <span>Address: </span>
                            <span class="font-bold"><?= $venue['venue_address']; ?></span>
                        </div>
                        <div>
                            <div class="p-3">
                                <a href="">
                                    <i class="text-green-600  fa-solid fa-pen-to-square fa-2x fa-inverse"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="p-3">
                                <a href="">
                                    <i class="text-red-600 fa-solid fa-trash-can-xmark fa-2x fa-inverse"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
            
        </div>
    </div>
</section>

<?php require 'views/partials/footer.seller.php'; ?>