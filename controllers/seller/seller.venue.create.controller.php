<?php
require 'models/seller.model.php';
$errors = [];
$userId = $_SESSION['user-id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Variables
    $name = $_POST['name'];
    $address = $_POST['address'];
    $numberColumn = $_POST['number_column'];
    // Check start_time and end_time
    empty($name) || trim($name) == "" ? $errors['name'] = "Please enter name." : "";
    empty($address) || trim($address) == "" ? $errors['address'] = "Please enter address." : "";
    isset($_POST['row_letter']) ? "" : $errors['row_letter'] = "Please select row." ;
    empty($numberColumn) || $numberColumn < 0 ? $errors['number_column'] = "Please enter column numbers." : "";

    if (empty($errors)) {
        // Insert a new show
        $seatRow = $_POST['row_letter'];
        createVenue($name, $address, $seatRow, $numberColumn, $userId);
        header('Location: /seller/venue');
    }
}
require 'views/seller/seller.venue.create.view.php';
