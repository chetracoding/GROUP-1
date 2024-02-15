<?php require "views/partials/head.php"?>
<?php require "views/partials/nav.php" ?>
<main class="my-32 flex justify-center text-white" onload = "autoClick();">
    <div id = "htmlContent" class="printicket w-10/12 bg-gray-800 from-blue-200 to-blue-100 border-b-4 border-white-600 shadow-2xl rounded-lg">
        <div class="card flex-1">
            <div>
                <div class="flex-1 flex-col ">
                    <span class="flex text-5xl font-bold text-white sm:pr-12 mx-8 mt-3 mb-4"><?= $ticket['title']?></span>
                    <span class="mx-8">Get ready for the best movie.</span>
                </div>
                <hr class="w-4/12 h-px mx-8 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="flex-1 flex-col mx-8">
                    <span class="font-bold"><?= $ticket['name']?></span>
                </div>
                <div class="flex-1 flex-col mx-8">
                    <span><?= $ticket['venue_address']?></span>
                </div>
                <hr class="w-4/12 h-px mx-8 bg-gray-200 border-0 dark:bg-gray-700">
            </div>
            <div class="flex mx-8 my-3 justify-between">
                <div>
                    <div class="hover:break-after-column">
                        <span class="font-bold flex-1 flex-col break-normal"><?= $ticket['date']?></span>
                    </div>
                    <div class="hover:break-after-column">
                        <span class="font-bold"><?= $ticket['start_time']?> - <?= $ticket['end_time']?></span>
                    </div>
                    <div class="hover:break-after-column">
                        <span>Name of seat: </span>
                        <?php foreach($seats as $seat):?>
                            <span class="font-bold"><?=$seat['seat_name']." "?></span>
                        <?php endforeach; ?>
                    </div>
                    <span>Customer Name: </span>
                    <span class="font-bold"><?= $ticket['first_name'] .' '. $ticket['last_name']?></span>
                </div>
                <div>
                    <div class="inline-grid grid-cols-1">
                        <span class="flex justify-end ">PUBLIC TICKET</span>
                        <span class="flex justify-end font-bold text-4xl">$<?= $ticket['price'] * $ticket['total_seats']?></span>
                        <span class="flex justify-end ">ONE TICKET FOR ONE PERSON </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between mb-6">
            <a href="/listtickets">
                <button class="bg-green-500 flex mx-8 text-white py-1 px-4 border-b-4 border-green-500 rounded">Go Back</button>
            </a>
            <div class="flex">
                <a class="bg-green-500 cursor-pointer flex text-white py-1 px-4 border-b-4 border-green-500 rounded" id="download" class="text-red-600">Download</a>
                <button type="submit" class="bg-green-500 flex mx-8 text-white py-1 px-4 border-b-4 border-green-500 rounded" onclick="openForm()">Scan QR</button>
            </div>
        </div>
    </div>
    
    <div id="popup" style="display: none" class=" flex justify-center items-center">
        <div class="qr-code rounded-lg flex justify-center bg-white border border-green-500 border-2 p-10 items-center flex-col gap-5">
            <span class=" text-2xl font-bold flex items-center justify-center">QR Code Result</span>
            <img src="" alt="qr-code" class="border border-black border-2 p-5">
            <button type="button" class="btn cancel bg-green-500 flex mx-8  text-white py-1 px-4 flex items-center justify-center border-b-4 border-green-500 w-60 rounded" onclick="closeForm()"></button>
        </div>
    </div>

</main>

<script defer src="views/printticket/js/qrcode.js"></script>
<?php require "views/partials/footer.php" ?>