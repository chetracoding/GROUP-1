<div class="grid grid-cols-4 gap-8 m-20">
<?php foreach($shows as $show): ?>
    <div id="card-shows" class="bg-gray-800 border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="h-4/6 flex justify-center items-center">
        <img class="h-full" src= <?= $show['image']?> alt="show image"/>
    </div>
    <div class="h-2/6 bg-gray-700">
        <div class="h-3/5 p-2 flex flex-col justify-between">
        <h5 class="mb-2 text-2l tracking-tight text-white" ><?= $show['name']?></h5>
        <p class="mb-3 text-sm text-white" ><?= $show['date']?></p>
        </div>
        <div class="h-2/5 p-2 flex justify-center items-center">
            <a href="/detail?id=<?= $show['show_id']?>" class="w-full inline-flex justify-center items-center px-3 py-2 text-sm font-normal  text-center text-white bg-green-600 rounded-lg hover:bg-green-800">
            Detail
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
    </div>
<?php endforeach; ?>
</div>