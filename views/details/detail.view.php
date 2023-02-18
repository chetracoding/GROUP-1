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
              <p id ="price" class="text-slate-200">$<?= $details['price']?></p>
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
        <div class = "flex justify-end">
            <a class="flex w-50 items-center justify-center rounded-md border border-transparent bg-green-600 py-2  px-8 text-base font-medium text-white hover:bg-green-700" href="/">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mx-11 my-10 bg-gray-800 ">
  <p class="text-xl pl-10 pt-10 text-gray-100">Choose Times</p>
  <div class="px-10 pb-10 pt-5 grid grid-cols-4 gap-4">

  <?php foreach ($times as $time): ?>

    <a href="/detail/seat?show_id=<?=$_GET['show_id']?>&date_id=<?=$time['release_date_id']?>">
      <div class="rounded-lg border-gray-400 bg-white p-4 flex flex-col justify-between">
        <div class="flex items-center gap-2">
          <i class="fa-regular fa-calendar-days"></i>
          <div class="text-gray-900 font-bold text-xl mb-2"><?=$time['date']?></div>
        </div>
    
        <div class="flex items-center gap-2">
          <i class="fa-solid fa-timer"></i>
          <p class="text-gray-700 text-base">Start: <span class="font-bold"><?=$time['start_time']?></span></p>
        </div>

        <div class="flex items-center gap-2">
          <i class="fa-solid fa-timer"></i>
          <p class="text-gray-700 text-base">End: <span class="font-bold"><?=$time['end_time']?></span></p>
        </div>
      </div>
    </a>

    <?php endforeach; ?>

  </div>
</div>

<script src="views/details/js/detail.js"></script>
<?php require "views/partials/footer.php" ?>