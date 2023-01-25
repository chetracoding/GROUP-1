<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<script src = "https://cdn.tailwindcss.com"></script>
<div class="relative z-10 " role="dialog" aria-modal="true">
    <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
 
      <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
        <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pt-14 pb-8 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
          <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
            <span class="sr-only">Close</span>
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
          <div class="">
            <div class=" mb-10">
              <img src="<?= $details['image'] ?>" alt="Two each of gray, white, and black shirts arranged on table." class="object-cover object-center w-full h-full">
            </div>
            <div class="sm:col-span-8 lg:col-span-7">
              <h1 class="text-2xl font-bold text-gray-900 sm:pr-12"><?= $details['name']?></h1>
              <section aria-labelledby="options-heading" class="mt-10">
                <h3 id="options-heading" class="sr-only">Price Detail</h3>
                <form class = "space-y-2 ">
                    <div>
                        <p class=" font-bold text-gray-900 sm:pr-12">Price Detail</p>
                        <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                            <li class="text-black-400"><span class="text-black-600">VIP: S$208-$228</span></li>
                            <li class="text-black-400"><span class="text-black-600">A Reserve: S$178-$198 </span></li>
                            <li class="text-black-400"><span class="text-black-600">B Reserve: S$158-$178</span></li>
                            
                        </ul>
                    </div>
                    <div>
                        <p class="font-bold  text-gray-900 sm:pr-12">Date Time</p>
                        <p><?= $details['date']?></p>
                    </div>
                    <div>
                        <p class="font-bold  text-gray-900 sm:pr-12">Description</p>
                        <p><?= $details['details'] ?></p>
                    </div>
                    <div class = "flex space-x-4">
                      
                        <button type="submit" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"><a href="/">Go Back</a></button>
                        <button type="submit" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Buy Ticket</button>
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