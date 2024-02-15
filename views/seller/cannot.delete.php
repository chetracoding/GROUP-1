<?php 
    require 'views/partials/head.php'; 
    require 'views/partials/nav.seller.php'; 
    require 'views/partials/aside.seller.php'; 
?>

<div class="warming-dailog w-full flex justify-center items-center  dark:bg-gray-900">
    <div class="w-full h-60 block shadow-lg max-w-sm text-center">
        <div class="dailog-wardming-show w-3/2 flex flex-col justify-center items-center border-b border-green-600 bg-gray-200">
            <img src="../../assets/warming_delete.png" width="100px">
        </div>
        <div class="p-2 bg-gray-300">
            <p class="mb-4 my-6 mb-2">
                Can not delete because show already sold!
            </p>
            <div class="back-btn">                                
                <button class="bg-green-600 hover:bg-green-700 text-white py-2 py-2 px-5 rounded-full mt-9 m-4 shadow-lg"><a href="/seller">Go Back</a></button>        
            </div>
        </div>
    </div>
</div

<?php require 'views/partials/footer.seller.php'; ?>