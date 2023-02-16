<?php 
    require 'views/partials/head.php'; 
    require 'views/partials/nav.seller.php'; 
    require 'views/partials/aside.seller.php'; 
?>

<section class="w-full">
    <div id="main" class="w-full main-content flex1 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="flex justify-between items-center w-full pl-6 pt-6 pr-6">
            <span class="text-slate-700 rounded-md text-lg font-medium">List of Shows</span>
            <a class="text-center flex items-center text-white-600 rounded-full px-6 py-2 bg-blue-600" href="/seller/createShow">
                <i class="fa-regular fa-video-plus fa-2x fa-inverse"></i>
            </a>
        </div>

        <div class="w-full gap-4 ">
        <?php foreach($shows as $show) :?>
            <div class="w-full px-6 py-3 ">
                <div class=" sm:rounded-lg bg-gray-800 from-blue-200 to-blue-100 border-b-4 border-blue-600 shadow-xl p-5">
                    <div class="text-slate-400 flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <img class=" rounded w-20 h-20"src="./assets/uploaded/<?php echo $show['image']; ?>" >
                        </div>
                        <div class="w-1/5 flex flex-col">
                            <span>Title: </span>
                            <span class="font-semibold"><?= $show['title']; ?></span>
                        </div>
                        <div class="w-1/4 flex flex-col">
                            <span>Venue: </span>
                            <span class="font-semibold"><?= $show['name']; ?></span>
                        </div>
                        <div class="flex-1 flex flex-col">
                            <span>Tickets: </span>
                            <span class="font-semibold"><?= $show['number_tickets']; ?></span>
                        </div>
                        <div class="flex-1 flex flex-col">
                            <span>Price: </span>
                            <span class="font-semibold">$<?= $show['price']; ?></span>
                        </div>
                        <div>
                            <div class="p-3">
                                <a href="/seller/time?id=<?= $show['show_id']; ?>">
                                    <i class="text-blue-600  fa-solid fa-timer fa-2x fa-inverse"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="p-3">
                                <a href="/seller/editShow?id=<?= $show['show_id']; ?>">
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