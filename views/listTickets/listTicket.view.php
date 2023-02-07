<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<body>

<div class="w-full px-6 py-3">
    <h1 class="text-black font-bold py-3">List Tickets</h1>

    <div class="bg-gray-800 from-blue-200 to-blue-100 border-b-4 border-blue-600 shadow-xl p-5">
        <div class="text-slate-400 flex flex-row items-center">
            <div class="flex-shrink flex flex-1 pr-2">
                <img class="h-25 w-20"src="https://www.majorcineplex.com.kh/load_file/movie/file_20220926020910.jpg" alt="">
            </div>
            <div class="w-1/5 flex-2 flex flex-col">
                <span>Title: </span>
                <span class="font-bold">Come Back Home</span>
            </div>
            <div class="w-1/5 flex flex-col">
                <span>Venue: </span>
                <span class="font-bold">MAJOR CINEPLEX AEON MALL PHNOM PENH</span>
            </div>
            <div class="flex-1 flex flex-col">
                <span>Release date: </span>
                <span class="font-bold">2-6-2023</span>
            </div>
            <div class="flex-1 flex flex-col">
                <span>Tickets: </span>
                <span class="font-bold">4</span>
            </div>
            <div class="flex-1 flex flex-col">
                <span>Price: </span>
                <span class="font-bold">$2</span>
            </div>
            <div>
                <div class="p-3">
                    <a href="">
                        <button class=" text-s flex-1 bg-green-500 text-black font-bold py-1 px-4 rounded ">View</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="views/home/js/script.js"></script>
<?php require "views/partials/footer.php" ?>