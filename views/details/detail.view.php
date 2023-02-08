<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<div class="mx-11 my-10 bg-gray-800">

  <div class="flex p-7 gap-10 ">
      <div class="w-2/4 flex items-center justify-center">
        <?= $details['video_trailer'] ?>
      </div>
      <div class="flex flex-col justify-between bg-gray-700 p-5 border-l-4 border-stone-200 w-2/4 text-left">
        <h1 class="text-2xl font-bold text-slate-200 sm:pr-12"><?= $details['title']?></h1>
        <div class="h-3/4 text-left mt-5 ">
          <div>
              <p class="text-slate-200 font-bold text-gray-900 sm:pr-12">Price Detail</p>
              <p class="text-slate-200">$<?= $details['price']?></p>
          </div>
          <div>
              <p class="font-bold text-slate-200 sm:pr-12">Date Time</p>
              <p class="text-slate-200"><?= $details['date']?></p>
          </div>
          <div>
              <p class="font-bold text-slate-200 sm:pr-12">Duration</p>
              <p class="text-slate-200"><?= $details['duration'] ?></p>
          </div>
          <div>
              <p class="font-bold text-slate-300 sm:pr-12">Description</p>
              <p class="text-slate-200"><?= $details['description'] ?></p>
          </div>
        </div><br>
        <div class = "flex justify-between">
            <a class="flex w-50 items-center justify-center rounded-md border border-transparent bg-green-600 py-2  px-8 text-base font-medium text-white hover:bg-green-700" href="/">Go Back</a>
            <a id ="buy" class="flex w-50 items-center justify-center rounded-md border border-transparent bg-green-600 py-2 px-8 text-base font-medium text-white hover:bg-green-700" href="">Buy Ticket</a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="mx-11 my-10 bg-gray-800 ">

  <div class="flex p-7 gap-10 text-white ">
      <div class="w-2/4 flex flex-col space-y-4 p-10 ">
        <h2 class="text-2xl font-bold text-white sm:pr-12">Date abd number of ticket</h2>
        <label for="address" class="block mb-2 text-sm font-medium text-white dark:text-black">Selecte time</label>
        <select id="address" name="address" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
            <option selected disabled>Choose</option>
        </select>
        <div class ="space-y-4">
            <label for="number" class="block mb-2 text-sm font-medium text-white dark:text-black">Number of ticket</label>
            <input type="number" name="number" id="password" value="" placeholder="number ticket" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
            <span class="text-red-600"></span>
        </div>
      </div>
      <div class="flex flex-col bg-white p-5 border-l-4 border-stone-200 w-2/4 text-black">
        <h1 class="text-2xl font-bold text-black sm:pr-12">List of booking ticket</h1>
        <div class="h-3/4 text-black mt-5">
          <div>
              <p class="text-black font-bold sm:pr-12">Moview Title :</p>
              <p class="text-black-200"></p>
          </div>
          <div>
              <p class="font-bold text-black sm:pr-12">Date Time :</p>
              <p class="text-slate-200"></p>
          </div>
          <div>
              <p class="font-bold text-black sm:pr-12">Number of ticket :</p>
              <p class="text-black"></p>
          </div>
          <div>
              <p class="font-bold text-black sm:pr-12">Total :</p>
              <p class="text-black"></p>
          </div>
          <div>
              <p class="font-bold text-black sm:pr-12">Venues :</p>
              <p class="text-black"></p>
          </div>
        </div>
        <div class = "flex justify-end">
            <a class="flex w-50 items-center justify-center  rounded-md border border-transparent bg-green-600 py-2 px-8 text-base font-medium text-white hover:bg-green-700" href="/">Booking now</a>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src="js/script.js"></script>
<?php require "views/partials/footer.php" ?>