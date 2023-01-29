<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<div class="mx-11 my-10 bg-gray-800">

  <div class="flex p-7 gap-10 ">
      <div class="w-2/4 flex items-center justify-center">
        <img src="<?= $details['image'] ?>">
      </div>
      <div class="flex flex-col justify-between bg-gray-700 p-5 border-l-4 border-stone-200 w-2/4 text-left">
        <h1 class="text-2xl font-bold text-slate-200 sm:pr-12"><?= $details['name']?></h1>
        <div class="h-3/4 text-left mt-5">
          <div>
              <p class="text-slate-200 font-bold text-gray-900 sm:pr-12">Price Detail</p>
              <p class="text-slate-200">4$</p>
          </div>
          <div>
              <p class="font-bold text-slate-200 sm:pr-12">Date Time</p>
              <p class="text-slate-200"><?= $details['date']?></p>
          </div>
          <div>
              <p class="font-bold text-slate-200 sm:pr-12">Duration</p>
              <p class="text-slate-200">1 HR. 50 MINS</p>
          </div>
          <div>
              <p class="font-bold text-slate-300 sm:pr-12">Description</p>
              <p class="text-slate-200"><?= $details['details'] ?></p>
          </div>
        </div>
        <div class = "flex justify-between">
            <a class="flex w-50 items-center justify-center rounded-md border border-transparent bg-green-600 py-2  px-8 text-base font-medium text-white hover:bg-green-700" href="/">Go Back</a>
            <a class="flex w-50 items-center justify-center rounded-md border border-transparent bg-green-600 py-2 px-8 text-base font-medium text-white hover:bg-green-700" href="/buy">Buy Ticket</a>
        </div>
      </div>
    </div>
  </div>

  <div class="flex items-center justify-center mx-11 my-10">
    <?= $details['video_trailer'] ?>
  </div>

</div>

<?php require "views/partials/footer.php" ?>