<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>

<!-- Require pop up -->
<div id="popup" class="no-seat justify-center items-center">
  <div class="flex flex-col items-center justify-center max-w-sm px-20 py-8 bg-white border rounded-lg shadow">
    <i class="text-red-500 fa-solid fa-brake-warning text-6xl"></i>
    <span class="text-red-500 text-xl	">Please select seat !</span>
    <buttome type="button" id="btn-no-seat" class="cursor-pointer inline-flex items-center mt-3 px-20 py-2 text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
        OK
    </buttome>
  </div>
</div>

<!-- Require pop up -->
<div id="popup" class="max-seat justify-center items-center">
  <div class="flex flex-col items-center max-w-sm px-20 py-10 bg-white border rounded-lg shadow">
    <i class="text-red-500 fa-solid fa-brake-warning text-6xl"></i>
    <span class="text-red-500 text-xl	">Maximum 10 seats !</span>

    <buttome type="button" id="btn-max-seat" class="cursor-pointer inline-flex items-center mt-3 px-20 py-2 text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
        OK
    </buttome>
  </div>
</div>

<form action="#" method="POST">

<div class="flex flex-col items-center justify-center mx-11 my-10 bg-gray-800">
  <div class="w-2/3 bg-white mt-10 p-4 text-center font-bold">SCREEN</div>
  <div class="flex flex-col p-10">

    <?php
    $rowLetters = range($seatRow, "A");
    $booked = $seatBooked;
    foreach($rowLetters as $rowLetter) : ?>
    <!-- Create seats -->
    <div class="flex <?= ($numberColumn > 22) ? "gap-2": "gap-5" ?>">
      
      <?php for($col = 1; $col < $numberColumn + 1; $col++) :?>
        
        <div class="chair-col">
          <input type="checkbox" class="hidden field-seat" id="<?= $rowLetter . $col ?>" value="<?= $rowLetter . $col ?>" name="seat[]" >

          <label class="<?= ($numberColumn <= 20 ) ? "text-3xl": "text-2xl" ?>  text-white" for="<?= $rowLetter . $col ?>">
            <i class="fa-solid fa-couch"></i>
            
            <!-- Show letter of row seats -->
            <?php if ($col == $numberColumn) : ?>
              <span class="text-white"><?= $rowLetter?></span>
            <?php endif ?>
            
          </label>
        </div>
        
      <?php endfor ?>
    </div>

    <?php endforeach; ?>
  </div>
</div>

<div class="flex p-5 mx-11 my-10 bg-gray-800 ">
    <!-- Store show price -->
    <input type="hidden" id="show-price" value="<?= $time['price'] ?>">
    
    <!-- Result booking seats -->
    <div class="flex flex-col bg-white p-5 border-l-4 border-stone-200 w-3/4 text-black">
      <h1 class="text-2xl font-bold text-black sm:pr-12"><?= $time['title'] ?></h1>
      <div class="text-xl h-3/4 text-black mt-5">
          <div class="flex gap-2">
            <i class="ml-2 mt-1 text-blue-600 fa-solid fa-location-dot"></i>
            <p class="text-black sm:pr-12">Venue : <span id = "get-venue" class="font-bold text-black"><?= $time['name'] ?></span></p>
          </div>
          <div class="ml-2 flex gap-2">
            <i class="mt-1 text-blue-600 fa-regular fa-calendar"></i>
            <p class="text-black sm:pr-12">Date : <span class="font-bold text-black"><?= $time['date'] ?></span></p>
          </div>
          <div class="flex gap-2">
            <i class="mt-1 text-blue-600 fa-regular fa-timer"></i>
            <p class="text-black sm:pr-12">Start : <span id="get-time" class="font-bold text-black"><?= $time['start_time'] ?></span></p>
          </div>
          <div class="flex gap-2">
            <i class="mt-1 text-blue-600 fa-regular fa-timer"></i>
            <p class="text-black sm:pr-12">End : <span id="get-time" class="font-bold text-black"><?= $time['end_time'] ?></span></p>
          </div>
          <div class="flex gap-2">
            <i class="mt-1 text-blue-600 fa-regular fa-loveseat"></i>
            <p class="text-black sm:pr-12">Your seat : <span id="your-seat" class="font-bold text-black"></span></p>
          </div>
          <div class="flex gap-2">
            <i class="mt-1 text-blue-600 fa-light fa-circle-dollar"></i>
            <p class="text-black sm:pr-12">Total price: $<span id="total-price" class="font-bold text-black">0</span></p>
          </div>
          <div class="flex gap-2">
            <i class="mt-1 text-blue-600 fa-light fa-circle-location-arrow"></i>
            <p class="text-black sm:pr-12"> Address : <span id = "get-address" class="font-bold text-black"><?= $time['venue_address'] ?></span></p>
          </div>
      </div>
    </div>
  
    <!-- Confirm Purchase -->
    <div class="flex flex-col py-5 pl-5 border-l-4 border-stone-200 w-2/4 text-black">
      <div id="credit-card">
          <h1 class="font-bold text-white text-2xl text-center">Confirm Purchase</h1>
          <div class="flex mb-4">
            <img src="../../assets/credit_card_logo.png" alt="">
          </div>
          <div class="mb-6">
              <label class="block text-white text-sm mb-2 flex-col text-start font-bold">Number card</label>
              <input type="number" id="number-card" name="number-card" class="w-full border-green-600 py-2 px-4 rounded-lg focus:ring-2 focus:ring-green-200"></input><br>
              <span class="text-red-500 text-start" id="error-number">
          </div>
          <div class="mb-6">
              <label class="block text-white text-sm mb-2 text-start font-bold"> Expires Date </label>
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

  </div>
</form>

<script>
  // FUNCTIONS
  function onBookingSeat(element) {
    if (storeSeats.length < maximumSeat) {
      if (element.checked) {
        element.nextElementSibling.style.color = "#1F51FF";
        element.nextElementSibling.firstElementChild.className = "fa-solid fa-couch";
      } else {
        element.nextElementSibling.style.color = "white";
        element.nextElementSibling.firstElementChild.className = "fa-solid fa-couch";
      }
    } else {
      element.checked = false;
      element.nextElementSibling.style.color = "white";
      element.nextElementSibling.firstElementChild.className = "fa-solid fa-couch";
      document.querySelector(".max-seat").style.display = "flex";
    }

    getSeats();
	}

  function showBookingSeats(seats) {
    let listSeats = '';
    for (let i=0; i<seats.length; i++) {
      if (seats.length == 1) {
        listSeats += seats[i] + "  ";
      } else {
        listSeats += seats[i] + ", ";
      }
    }

    listSeats = listSeats.substring(0, listSeats.length - 2);
    yourSeats.textContent = listSeats;
    totalPrice.textContent = showPrice * seats.length;
  }

  function getSeats() {
    storeSeats = [];
    for (let seat of allSeats) {
      if (seat.checked && storeSeats.length < maximumSeat) {
        storeSeats.push(seat.value);
      }
      limitSeats(seat, storeSeats.length, maximumSeat);
    }
    showBookingSeats(storeSeats);
  }

  function setSeatBooked(elements, booked) {
    for (let seat of elements) {
      for (let b of booked) {
        if (seat.value == b) {
          seat.disabled = true;
          seat.nextElementSibling.style.color = "#DC143C";
          seat.nextElementSibling.firstElementChild.className = "fa-solid fa-ban";
        }
      }
	  }
  }

  function limitSeats(element, numberSeats, maximum) {
    if (numberSeats > maximum) {
      element.checked = false;
    }
  }

  // VARIABLES
	let booked = <?php echo json_encode($booked); ?>;
	let allSeats = document.querySelectorAll(".field-seat");
  let storeSeats = [];
  let maximumSeat = 10;
  let yourSeats = document.querySelector("#your-seat");
  let showPrice = document.querySelector("#show-price").value;
  let totalPrice =  document.querySelector("#total-price");

	// ADD EVENTS
	for (let inp of allSeats) {
		inp.addEventListener("click", function () {
			onBookingSeat(this);
		});
	}

  // AUTO CALL
  setSeatBooked(allSeats, booked);

</script>

<script defer src="../../views/details/js/detail.js"></script>
<?php require "views/partials/footer.php" ?>