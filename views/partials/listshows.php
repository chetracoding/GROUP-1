
  <div class="flex items-center justify-center m-10">

    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-5  ">
      <?php foreach($shows as $show): ?>
      <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30 shadow-lg shadow-indigo-500/40 rounded">
      <div class="h-65 w-50">
        <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="assets/uploaded/<?= $show['image']?>" alt="" />
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/200"></div>
      <div class="absolute inset-0 flex translate-y-[62%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
        <h1 class="mb-5 font-dmserif text-1xl font-bold text-white"><?= $show['title']?></h1>
        <div class="flex justify-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <p class="mb-3 text-sm italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100"><?= $show['date']?></p>
        </div>
        <div class="flex justify-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-500">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" /></svg>
          <p class="mb-3 text-sm italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100"><?= $show['action']?></p>
        </div>
        <button class="rounded-full hover:bg-green-500 hover:text-white py-2 px-4 border border-green-500 hover:border-transparent py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60"><a href="/detail?show_id=<?= $show['show_id']?>">See More </a></button>
      </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>