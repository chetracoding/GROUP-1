<?php
require 'models/seller.model.php';
// Get name of venue from database
$getNameVenues = getVenuesByUserId($_SESSION['user-id']);
// Get name of type_of_show  from database
$getNameTypes =  getNameTypes();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Variables
    $title = $_POST['title'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $video_trailer = $_POST['video_trailer'];
    $action = $action;
    $number_ticket =$_POST['number_tickets'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $date_show = $_POST['date_show'];
    $price = $_POST['price'];

    // get image from input
    $image = $_FILES['image']['name'];

    // Check title and description
    empty($title) || trim($title) == "" ? $errors['title'] = "Please enter title." : "";
    empty($description) || trim($description) == "" ? $errors['description'] = "Please enter description." : "";
    
    // Check image and duration
    empty($image )? $errors['image'] = "Please select image." : "";
    empty($duration)? $errors['duration'] = "Please enter duration." : "";
    
    // Check video_trailer
    empty($video_trailer)? $errors['video_trailer'] = "Please select video_trailer." : "";
    
    // Check action and number of ticket
    empty($action) || trim($action) == "" ? $errors['action'] = "Please enter action." : "";
    empty($number_ticket) ? $errors['number_tickets'] = "Please enter number_ticke." : "";
    
    // Check start_time and end_time
    empty($start_time) || trim($start_time) == "" ? $errors['start_time'] = "Please enter start_time." : "";
    empty($end_time) || trim($end_time) == "" ? $errors['end_time'] = "Please enter end_time." : "";
    
    // Check date of show and price
    empty( $date_show)? $errors['date_show'] = "Please select date_show." : "";
    empty($price)? $errors['price'] = "Please select price." : "";
    

    // Check address and types
    empty($_POST['address'])? $errors['address'] = "Please select address." : "";
    empty($_POST['types'])? $errors['types'] = "Please select types." : "";
    
    // Check terms
    isset($_POST['terms'])? "" : $errors['terms'] = "Please check terms.";

    if (empty($errors)) {
        // Variables
        $address = (int)($_POST['address']);
        $types = (int)($_POST['types']);
        $image_tmp_name=$_FILES['image']['tmp_name'];
        $image_folder='assets/uploaded/'. $image;
        move_uploaded_file($image_tmp_name, $image_folder);

        // Insert a new show
        createShows($title, $description, $image, $duration, $video_trailer, $action, $number_ticket, $price, $address, $types);
        header('Location: /seller');
    }

}
require 'views/seller/seller.createshow.view.php';
