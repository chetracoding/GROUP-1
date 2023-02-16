<?php
require 'models/seller.model.php';
$errors = [];
$userId = $_SESSION['user-id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Variables
    $name = $_POST['name'];
    $address = $_POST['address'];
    // Check start_time and end_time
    empty($name) || trim($name) == "" ? $errors['name'] = "Please enter name." : "";
    empty($address) || trim($address) == "" ? $errors['address'] = "Please enter address." : "";

    if (empty($errors)) {
        // Insert a new show
        createVenue($name, $address, $userId);
        header('Location: /seller/venue');
    }
}
require 'views/seller/seller.venue.create.view.php';
