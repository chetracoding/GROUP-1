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
        <div class = "flex justify-end">
            <a class="flex w-50 items-center justify-center rounded-md border border-transparent bg-green-600 py-2  px-8 text-base font-medium text-white hover:bg-green-700" href="/">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="mx-11 my-10 bg-gray-800 ">
  <form action="controllers/details/buy.controller.php" method="GET">

    <div class="flex p-7 gap-10 text-white ">
      <div class="w-2/4 flex flex-col space-y-4 p-10 ">
        <h2 class="text-2xl font-bold text-white sm:pr-12">Date and number of ticket</h2>
        <label for="date" class="block mb-2 text-sm font-medium text-white">Selecte time</label>
        <select id="date" name="date" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
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
              <input id="number-ticket" disabled type="number" min="1" max="10" name="number" value="0" placeholder="0" class="bg-gray-50 border border-green-400 text-gray-900 sm:text-sm rounded-lg focus:ring-1.5 focus:ring-green-500 font-medium block w-full p-2.5">
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
              <div>
                <p class="text-black sm:pr-12">Movie Title : <span class="font-bold text-black"><?= $details['title']?></span></p>
              </div>
              <div>
                <p class="text-black sm:pr-12">Date : <span id="get-date" class="font-bold text-black"></span></p>
              </div>
              <div>
                <p class="text-black sm:pr-12">Time : <span id="get-time" class="font-bold text-black"></span></p>
              </div>
              <div>
                <p class="text-black sm:pr-12">Total tickets: <span id="total-tickets" class="font-bold text-black"><?= $details['number_tickets']?></span></p>
              </div>
              <div>
                <p class="text-black sm:pr-12">Ticket can buy: <span id="ticket-canbuy" class="font-bold text-black"></span></p>
              </div>
              <div>
                <p class="text-black sm:pr-12">Your ticket: <span id="your-ticket" class="font-bold text-black">0</span></p>
              </div>

          </div>
          <div class = "flex justify-end">
              <button id="book-now" type="button" class="flex w-50 items-center justify-center  rounded-md border border-transparent bg-green-600 py-2 px-8 text-base font-medium text-white hover:bg-green-700">Booking now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Confirm credit card -->
    <div id="credit-card" style="display: none;" class="flex flex-col items-center margin-top: 100px;">
      <div class="bg-white shadow-2xl px-8 pt-6 pb-8 mb-4 w-2/5">
        <h1 class="font-bold text-2xl text-center pb-8">Confirm Purchase</h1>
        <div class="mb-6">
            <label class="block text-sm mb-2 flex-col text-start font-bold">Number card</label>
            <input type="number" id="number-card" name="number-card" class="w-full border-green-600 py-2 px-4 rounded-lg focus:ring-2 focus:ring-green-200"></input><br>
            <span class="text-red-500 text-start" id="error-number">
        </div>
        <div class="mb-6">
            <label class="block text-sm mb-2 text-start font-bold"> Expires Date </label>
            <input type="date" id="expires-date" class="w-full border-green-600 py-2 px-4 rounded-lg focus:ring-2 focus:ring-green-200"> </input><br>
            <span id="error-card-expiration" class="text-red-600"></span>
        </div>

        <div class="flex items-center justify-between">
            <button id="btn-pay" class="bg-green-500 w-full hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg">
                Pay Now  
            </button>
        </div>
    </div>

  </form>
</div>

<script src="views/details/js/detail.js"></script>
<?php require "views/partials/footer.php" ?>