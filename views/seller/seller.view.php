<?php 
    require 'views/partials/head.php'; 
    require 'views/partials/nav.seller.php'; 
    require 'views/partials/aside.seller.php'; 
?>

<section class="ml-48 mt-14">
    <div id="main" class="w-full main-content flex1 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="flex justify-between items-center w-full pl-6 pt-6 pr-6">
            <span class="text-slate-700 rounded-md text-lg font-medium">List of Shows</span>
            <a class="text-center flex items-center text-white rounded-full px-8 py-2 bg-blue-600" href="/seller/show/create">
                <i class="fa-solid fa-square-plus fa-2x"></i>
            </a>
        </div>

        <div class="w-full gap-4">
        <?php foreach($shows as $show) :?>
            <div class="w-full px-6 py-3">
                <div class="sm:rounded-lg bg-gray-800 from-blue-200 to-blue-100 border-b-4 border-blue-600 shadow-xl p-5">
                    <div class="text-slate-400 flex flex-row">
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
                            <span>Duration: </span>
                            <span class="font-semibold"><?= $show['duration']; ?></span>
                        </div>
                        <div class="flex-1 flex flex-col">
                            <span>Price: </span>
                            <span class="font-semibold">$<?= $show['price']; ?></span>
                        </div>
                        <div>
                            <div class="p-3">
                                <a href="/seller/time?id=<?= $show['show_id']; ?>">
                                    <i class="text-blue-600  fa-solid fa-clock fa-2x fa-inverse"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="p-3">
                                <a href="/seller/show/edit?id=<?= $show['show_id']; ?>">
                                    <i class="text-green-600  fa-solid fa-pen-to-square fa-2x fa-inverse"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="p-3">
                                <button id="btn-delete-show" type="button">
                                    <i class="text-red-600 fa-solid fa-trash fa-2x fa-inverse"></i>
                                    <input type="hidden" value="<?= $show['show_id']; ?>">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>

<div class="delete-dailog justify-center items-center">
    <div class="dailog-delete-show bg-white rounded-lg flex flex-col justify-center items-center">
        <img src="assets/deleteshow.png" width="80px" class="mb-8">
        <div class="question">
            <p>Are you sure you want delete your show?</p>
        </div>    
        <div class="delete-show-btns">
            <button type="button" id="btn-cancel" class="bg-green-500 hover:bg-green-700 text-white py-2 px-5 rounded-full mt-9 m-4 shadow-lg">Cancel</button>
            <button id="delete-btn"><a class="bg-red-600 hover:bg-red-700 text-white py-2 py-2 px-5 rounded-full mt-9 m-4 shadow-lg">Delete</a></button>
        </div>  
    </div>  
</div> 

<script src="views/seller/js/deleteshow.js"></script>
<?php require 'views/partials/footer.seller.php'; ?>