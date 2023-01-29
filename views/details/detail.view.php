<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<div class="mx-11 my-10 bg-gray-800">

  <div class="flex p-7 gap-10 detail-show">
      <div class="w-2/4 flex items-center justify-center" id="detail-item">
        <img src="<?= $details['image'] ?>">
        <!-- <img src="assets/login.png" alt="show image"> -->
      </div>
      <div class="pl-10 border-l-4 border-stone-200 w-2/4 text-left sm:col-span-8 lg:col-span-7" id="text-details">
        <h1 class="text-2xl font-bold text-slate-200 sm:pr-12"><?= $details['name']?></h1>
        <section aria-labelledby="options-heading" class="mt-10">
          <h3 id="text-slate-200 options-heading" class="sr-only">Price Detail</h3>
          <div class="space-y-2"></div>
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
            <div class = "flex space-x-4" id="btn">
                <a class="mt-6 flex w-50 items-center justify-center rounded-md border border-transparent bg-green-600 py-3 px-8 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2" href="/">Go Back</a>
                <a class="mt-6 flex w-50 items-center justify-center rounded-md border border-transparent bg-green-600 py-3 px-8 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2" href="/buy">Buy Ticket</a>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <div class="flex items-center justify-center mx-11 my-10">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/o5F8MOz_IDw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

</div>

<?php require "views/partials/footer.php" ?>