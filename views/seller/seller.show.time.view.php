<?php 
    require 'views/partials/head.php'; 
    require 'views/partials/nav.seller.php'; 
    
    require 'views/partials/aside.seller.php'; 
?>

<main class="ml-48 mt-14 flex">
    <div class="main-register h-2/4 w-2/5 bg-white flex m-6 sm:rounded-lg">
        <input id="show_duration" type="hidden" value="<?= $duration?>">

        <div class="w-full flex flex-col items-center justify-center px-8 py-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                Set show times  
            </h1><br>
            <form class="w-full space-y-4" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="date_show" class="block mb-2 text-sm font-medium text-gray-900 ">Date show</label>
                        <input type="date" name="date_show" id="date_show" value="<?= isset($_POST['date_show'])? $_POST['date_show'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" value="2018-07-22">
                        <span class="text-red-600"><?= isset($errors['date_show'])? $errors['date_show'] : ""; ?></span>              
                    </div>
                    <div>
                        <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 ">Start time</label>
                        <input type="time" name="start_time" id="start_time" value="<?= isset($_POST['start_time'])? $_POST['start_time'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" placeholder="Number ticket..">
                        <span class="text-red-600"><?= isset($errors['start_time'])? $errors['start_time'] : ""; ?></span>
                    </div>
                    <div>
                        <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 ">End time</label>
                        <input type="time" name="end_time" id="end_time" readonly value="<?= isset($_POST['end_time'])? $_POST['end_time'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" placeholder="end_time">
                        <span class="text-red-600"><?= isset($errors['end_time'])? $errors['end_time'] : ""; ?></span>
                    </div>
                <button type="submit" name = "upload" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-4 mb- focus:outline-none w-full">Add here</button>
            </form>
        </div>
    </div>

    <div class="w-3/6 m-6">
                
        <div class="main-register relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 ">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white">
                    Times of show
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Start Time
                        </th>
                        <th scope="col" class="px-6 py-3">
                            End Time
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($times as $time):?>

                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?=$time['date']?>
                        </th>
                        <td class="px-6 py-4">
                            <?=$time['start_time']?>
                        </td>
                        <td class="px-6 py-4">
                            <?=$time['end_time']?>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="/seller/time/edit?id=<?=$time['release_date_id']?>&show_id=<?=$time['show_id']?>" class="font-medium text-blue-600 hover:underline">Edit</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <input type="hidden" value="<?= $time['show_id']; ?>">
                            <a id="btn-delete-time" class="font-medium text-red-600 hover:underline cursor-pointer">Delete</a>
                            <input type="hidden" value="<?= $time['release_date_id']; ?>">
                        </td>
                    </tr>

                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<div class="delete-dailog justify-center items-center">
    <div class="rounded-lg dailog-delete-show bg-white flex flex-col justify-center items-center">
        <img src="../../assets/deleteshow.png" width="80px" class="mb-8">
        <div class="question">
            <p>Are you sure you want delete your time?</p>
        </div>    
        <div class="delete-show-btns">
            <button type="button" id="btn-cancel" class="bg-green-500 hover:bg-green-700 text-white py-2 px-5 rounded-full mt-9 m-4 shadow-lg">Cancel</button>
            <button id="delete-btn"><a class="bg-red-600 hover:bg-red-700 text-white py-2 py-2 px-5 rounded-full mt-9 m-4 shadow-lg">Delete</a></button>
        </div>  
    </div>  
</div> 

<script src="../../views/seller/js/time.js"></script>
<?php require 'views/partials/footer.seller.php'; ?>