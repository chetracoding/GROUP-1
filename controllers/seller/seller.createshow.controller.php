<?php
require 'models/seller.model.php';
// Get name of venue from database
$getNameVenues = getVenuesByUserId($_SESSION['user-id']);
// Get name of type_of_show  from database
$getNameTypes =  getNameTypes();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check title and description
    empty($_POST['title']) || trim($_POST['title']) == "" ? $errors['title'] = "Please enter title." : "";
    empty($_POST['description']) || trim($_POST['description']) == "" ? $errors['description'] = "Please enter description." : "";
    
    // Check image and duration
    empty($_POST['image'])? $errors['image'] = "Please select image." : "";
    empty($_POST['duration'])? $errors['duration'] = "Please select duration." : "";
    
    // Check video_trailer
    empty($_POST['video_trailer'])? $errors['video_trailer'] = "Please select video_trailer." : "";
    
    // Check action and number of ticket
    empty($_POST['action']) || trim($_POST['action']) == "" ? $errors['action'] = "Please enter action." : "";
    empty($_POST['number_ticke']) || trim($_POST['number_ticke']) == "" ? $errors['number_ticke'] = "Please enter number_ticke." : "";
    
    // Check start_time and end_time
    empty($_POST['start_time']) || trim($_POST['start_time']) == "" ? $errors['start_time'] = "Please enter start_time." : "";
    empty($_POST['end_time']) || trim($_POST['end_time']) == "" ? $errors['end_time'] = "Please enter end_time." : "";
    
    // Check date of show and price
    empty($_POST['date_show'])? $errors['date_show'] = "Please select date_show." : "";
    empty($_POST['price'])? $errors['price'] = "Please select price." : "";
    

    // Check address and types
    empty($_POST['address'])? $errors['address'] = "Please select address." : "";
    empty($_POST['types'])? $errors['types'] = "Please select types." : "";
    

    // Check terms
    isset($_POST['terms'])? "" : $errors['terms'] = "Please check terms.";

    if (empty($errors)) {
        header('Location: /seller/createshow');
    }

}


require 'views/seller/seller.createshow.view.php';
