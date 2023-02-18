<?php
require 'models/seller.model.php';

$editVenue = getVenue($_GET["id"]);

$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Variables
    $name = $_POST['name'];
    $address = $_POST['address'];
    $seatRow = $_POST['row_letter'];
    $seatColumn = $_POST['number_column'];
    // Check start_time and end_time
    empty($name) || trim($name) == "" ? $errors['name'] = "Please enter name." : "";
    empty($address) || trim($address) == "" ? $errors['address'] = "Please enter address." : "";
    empty($seatColumn) || $seatColumn < 0 ? $errors['number_column'] = "Please enter seat column." : "";

    if (empty($errors)) {
        // Insert a new show
        updateVenue($_GET["id"], $name, $address, $seatRow, $seatColumn);
        header('Location: /seller/venue');
    }
}

require 'views/seller/seller.venue.edit.view.php';