<?php require "views/partials/head.php"?>
<?php require "views/partials/nav.php" ?>
<main class="my-32 flex justify-center text-white">
    <div class="printicket w-10/12 bg-gray-800 from-blue-200 to-blue-100 border-b-4 border-white-600 shadow-2xl rounded-lg">
        <div class="card flex-1">
            <div>
                <div class="flex-1 flex-col ">
                    <span class="flex text-5xl font-bold text-white sm:pr-12 mx-8 mt-3"><?= $ticket['title']?></span>
                    <span class="mx-8">Get ready for the best movie.</span>
                </div>
                <hr class="w-4/12 h-px mx-8 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="flex-1 flex-col mx-8 my-2">
                    <span class="font-bold"><?= $ticket['name']?></span>
                </div>
                <hr class="w-4/12 h-px mx-8 bg-gray-200 border-0 dark:bg-gray-700">
            </div>
            <div class="flex mx-8 my-3 justify-between">
                <div>
                    <div class="hover:break-after-column">
                        <span class="font-bold flex-1 flex-col break-normal"><?= $ticket['date']?></span>
                    </div>
                    <div class="hover:break-after-column">
                        <span class="font-bold"><?= $ticket['start_time']?>pm - <?= $ticket['end_time']?>pm</span>
                    </div>
                    <div class="hover:break-after-column">
                        <span>Number of tickets:</span>
                        <span class="font-bold"><?= $ticket['total_tickets']?></span>
                    </div>
                    <span>CustomerName: </span>
                    <span class="font-bold"><?= $ticket['first_name'] .' '. $ticket['last_name']?></span>
                </div>
                <div>
                    <div class="inline-grid grid-cols-1">
                        <span class="flex justify-end ">PUBLIC TICKET</span>
                        <span class="flex justify-end font-bold text-4xl">$<?= $ticket['price'] * $ticket['total_tickets']?></span>
                        <span class="flex justify-end ">ONE TICKET FOR ONE PERSON </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between mb-6">
            <a href="/listtickets">
                <button class="bg-green-500 flex mx-8 text-white py-1 px-4 border-b-4 border-green-500 rounded">Go Back</button>
            </a>
            <a href="">
                <button class="bg-green-500 flex mx-8 text-white py-1 px-4 border-b-4 border-green-500 rounded">Scan QR</button>
            </a>
        </div>
    </div>
</main>
<?php require "views/partials/footer.php" ?>