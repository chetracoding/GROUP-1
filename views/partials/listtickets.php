<?php foreach($tickets as $ticket): ?>

    <div class="bg-gray-800 from-blue-200 to-blue-100 border-b-4 border-white-600 shadow-xl p-5">
        <div class="text-slate-400 flex flex-row items-center">
            <div class="flex-shrink flex pr-2">
                <img class="h-25 w-20"src="assets/uploaded/<?= $ticket['image'] ?>" alt="">
            </div>
            <div class="ml-5 w-1/5 flex-2 flex flex-col">
                <span>Title: </span>
                <span class="font-bold"><?= $ticket['title'] ?></span>
            </div>
            <div class="w-1/4 flex flex-col">
                <span>Venue: </span>
                <span class="font-bold"><?= $ticket['name'] ?></span>
            </div>
            <div class="flex-1 flex flex-col">
                <span>Release date: </span>
                <span class="font-bold"><?= $ticket['date'] ?></span>
            </div>
            <div class="flex-1 flex flex-col">
                <span>Seats: </span>
                <span class="font-bold"><?= $ticket['total_seats'] ?></span>
            </div>
            <div class="flex-1 flex flex-col">
                <span>Price: </span>
                <span class="font-bold">$<?= $ticket['price'] * $ticket['total_seats'] ?></span>
            </div>
            <div>
                <div class="p-3">
                    <a href="/printticket?id=<?= $ticket['ticket_id']?>">
                        <button class=" text-s flex-1 bg-green-500 text-white py-1 px-4 rounded">View</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>
