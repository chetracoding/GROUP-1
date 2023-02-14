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
  <form action="/detail/buy" method="POST">

    <div class="flex p-7 gap-10 text-white ">
      <div class="w-2/4 flex flex-col space-y-4 p-10 ">
        <h2 class="text-2xl font-bold text-white sm:pr-12">Date and number of ticket</h2>
        <label for="date" class="block mb-2 text-sm font-medium text-white">Selecte time</label>
        <select id="date" name="show-time" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
            <option selected disabled>Choose times</option>

            <?php foreach ($times as $time): ?>
              <option value="<?=$time['release_date_id']?>"><?='Date: '.$time['date']." | Time: " . $time['start_time'].' to '.  $time['end_time'] ?></option>
              <option style="display:none;" value=""><?= $time['total_bought']?></option>
            <?php endforeach; ?>

        </select>
        <span id="error-date" class="text-red-600"></span>
        <div class ="space-y-4">
            <label for="number-ticket" class="block mb-2 text-sm font-medium text-white">Number of tickets</label>
            <div class="flex gap-3">
              <input id="number-ticket" name="number-tickets" readonly type="number" min="1" max="10" value="0" placeholder="0" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
              <button type="button" id="btn-minus">
                <i class="fa-2x fa-solid fa-circle-minus hover:text-red-500"></i>
              </button>
              <button type="button" id="btn-plus">
                <i class="fa-2x fa-sharp fa-solid fa-circle-plus hover:text-green-500"></i>
              </button>
            </div>
            <span id="error-number-ticket" class="text-red-600"></span>
        </div>
      </div>
        <div class="flex flex-col bg-white p-5 border-l-4 border-stone-200 w-2/4 text-black">
          <h1 class="text-2xl font-bold text-black sm:pr-12"><?= $details['title']?></h1>
          <div class="h-3/4 text-black mt-5">
              <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <p class="text-black sm:pr-12">Venue : <span id = "get-venue" class="font-bold text-black"><?=  $name['name']?></span></p>
              </div>
              <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>
                <p class="text-black sm:pr-12">Date : <span id="get-date" class="font-bold text-black"></span></p>
              </div>
              <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <p class="text-black sm:pr-12">Time : <span id="get-time" class="font-bold text-black"></span></p>
              </div>
              <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                </svg>
                <p class="text-black sm:pr-12">Total tickets: <span id="total-tickets" class="font-bold text-black"><?= $details['number_tickets']?></span></p>
              </div>
              <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>

                <p class="text-black sm:pr-12">Ticket can buy: <span id="ticket-canbuy" class="font-bold text-black"></span></p>
              </div>
              <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                </svg>

                <p class="text-black sm:pr-12">Your ticket: <span id="your-ticket" class="font-bold text-black">0</span></p>
              </div>
              <div class="flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-black sm:pr-12">Total price: $<span id="total-price" class="font-bold text-black">0</span></p>
              </div>
              <div class="flex gap-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <p class="text-black sm:pr-12"> Address : <span id = "get-address" class="font-bold text-black"><?=  $name['venue_address']?></span></p>
              </div>

          </div>
          <div class = "flex justify-end">
              <button id="book-now" type="button" class="flex w-50 items-center justify-center  rounded-md border border-transparent bg-green-600 py-2 px-8 text-base font-medium text-white hover:bg-green-700">Booking now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Confirm credit card -->
    <div id="credit-card" style="display:none" class="flex mb-5 ">
      <div class="flex m-auto w-5/12">
        <div class="bg-white shadow-2xl px-8 pt-6 pb-8 mb-4 flex flex-col h-full  flex-1 border rounded-lg">
          <h1 class="font-bold text-2xl text-center pb-8">Confirm Purchase</h1>
          <div class="flex item-center gap-5 mb-5">
              <img class="w-full h-full rounded w-24 h-20 shadow-md "  src="../../assets/visa-card.png" alt="">
              <img class="w-full h-full rounded w-24 h-20 shadow-md " src="../../assets/ABA.png" alt="">
              <img class="w-full h-full rounded w-24 h-20 shadow-md " src="../../assets/Visa-Emblem.jpg" alt="">
              <img class="w-full h-full rounded w-24 h-20 shadow-md " src="../../assets/master-card.png" alt="">
          </div>
          <div class="mb-6">
              <label class="block text-sm mb-2 flex-col text-start font-bold">Number card</label>
              <input type="number" id="number-card" name="number-card" class="w-full border-green-600 py-2 px-4 rounded-lg focus:ring-2 focus:ring-green-200"></input><br>
              <span class="text-red-500 text-start" id="error-number">
          </div>
          <div class="mb-6">
              <label class="block text-sm mb-2 text-start font-bold"> Expires Date </label>
              <input type="date" id="card-expiration" name="card-expiration" class="w-full border-green-600 py-2 px-4 rounded-lg focus:ring-2 focus:ring-green-200"> </input><br>
              <span id="error-card-expiration" class="text-red-600"></span>
          </div>

          <div class="flex items-center justify-between">
              <button id="btn-pay" class="bg-green-500 w-full hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg">
                  Pay Now  
              </button>
          </div>
        </div>
    </div>

  </form>
</div>

<script src="views/details/js/detail.js"></script>
<?php require "views/partials/footer.php" ?>