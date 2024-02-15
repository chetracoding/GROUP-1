<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<body>

<div class="flex flex-col gap-4 w-full px-6 py-6">
    
    <?php if (! empty($tickets)) : ?>
        <h1 class="text-black font-bold">List Tickets</h1>
        <?php require "views/partials/listtickets.php" ?>
    <?php else : ?>
        <h1 class="text-center text-red-500 font-bold py-8">No tickets</h1>
    <?php endif; ?>

</div>

<?php require "views/partials/footer.php" ?>