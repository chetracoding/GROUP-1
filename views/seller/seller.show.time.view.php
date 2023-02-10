<?php 
    require 'views/partials/head.php'; 
    require 'views/partials/nav.seller.php'; 
    require 'views/partials/aside.seller.php'; 
?>
<main class="main-register m-auto w-6/12 flex ">
    <div class="bg-white w-full flex ">
        <div class="w-full flex flex-col items-center justify-center px-8 py-8 shadow mt-10">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                Set show times  
            </h1><br>
            <form class="w-full space-y-4" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="date_show" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Date_show</label>
                        <input type="date" name="date_show" id="date_show" value="<?= isset($_POST['date_show'])? $_POST['date_show'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" value="2018-07-22">
                        <span class="text-red-600"><?= isset($errors['date_show'])? $errors['date_show'] : ""; ?></span>              
                    </div>
                    <div>
                        <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Start_time</label>
                        <input type="time" name="start_time" id="start_time" value="<?= isset($_POST['start_time'])? $_POST['start_time'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" placeholder="Number ticket..">
                        <span class="text-red-600"><?= isset($errors['start_time'])? $errors['start_time'] : ""; ?></span>
                    </div>
                    <div>
                        <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">End_time</label>
                        <input type="time" name="end_time" id="end_time" value="<?= isset($_POST['end_time'])? $_POST['end_time'] : ""?>" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5" placeholder="end_time">
                        <span class="text-red-600"><?= isset($errors['end_time'])? $errors['end_time'] : ""; ?></span>
                    </div>
                <button type="submit" name = "upload" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-4 mb- focus:outline-none dark:focus:ring-green-800 w-full">Add here</button>
            </form>
        </div>
        <div class="bg-white w-full border-l-2 border-green-400">
            <div class="w-full flex flex-col items-center justify-center px-8 py-8  mt-10">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                        History time of shows  
                    </h1><br>
                    <div>
                        <ol class="list-decimal  text-sm font-bold">
                                <?php foreach($getDateStartEndTimes as $getDateStartEndTime):?>
                                <li><?="Date :".$getDateStartEndTime['date']?>
                                <div class="flex">
                                    <p><?="Time :".$getDateStartEndTime['start_time']." to ".$getDateStartEndTime['end_time']?></p>
                                </div>
                                </li>
                                <?php endforeach?>
                        </ol>
                    </div>
            </div>

        </div>    
    </div>
</main>
<?php require 'views/partials/footer.seller.php'; ?>