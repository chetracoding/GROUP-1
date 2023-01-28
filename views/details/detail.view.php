<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<div class="relative z-10" role="dialog" aria-modal="true">
    <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
      <div class="flex items-center justify-center w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
        <div class="bg-gray-800 sm:px-6 sm:pt-8 md:p-6 lg:p-8"> 
          <div class="detail-show">
            <div class="mb-10" id="detail-item">
              <img src="<?= $details['image'] ?>" alt="Two each of gray, white, and black shirts arranged on table." class="object-cover object-center w-full h-full">
            </div>
            <div class="sm:col-span-8 lg:col-span-7" id="text-details">
              <h1 class="text-2xl font-bold text-slate-200 sm:pr-12"><?= $details['name']?></h1>
              <section aria-labelledby="options-heading" class="mt-10">
                <h3 id="text-slate-200 options-heading" class="sr-only">Price Detail</h3>
                <form class = "space-y-2 ">
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
                        <button type="submit" class="mt-6 flex w-50 items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"><a href="/">Go Back</a></button>
                        <button type="submit" class="mt-6 flex w-50 items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"><a href="/buy">Buy Ticket</a></button>
                    </div>
                </form>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require "views/partials/footer.php" ?>