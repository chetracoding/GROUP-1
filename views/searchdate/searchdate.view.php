<?php require "views/partials/head.php";?>
<?php require "views/partials/nav.php";?>

<div id="form-date" >
  <form action='/searchdate' method= "post">
    <label for="date" class="font-bold text-white">From date:</label>
    <input type="date"  name="start-date" id="start-date" value="<?= isset($_POST['start-date'])? $_POST['start-date'] : "" ?>" class="hover:bg-gray-100  border border-green-500 rounded-xl" >
    <label for="date" class="font-bold text-white">To date:</label>
    <input type="date" name="end-date" id="end-date" value="<?= isset($_POST['end-date'])? $_POST['end-date'] : "" ?>" class="hover:bg-gray-100  border border-green-500 rounded-xl">
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Search</button>
  </form>
</div>

<?php require "views/partials/listshows.php" ?>
<script src="views/searchdate/js/searchdate.js"></script>
<?php require "views/partials/footer.php" ?>