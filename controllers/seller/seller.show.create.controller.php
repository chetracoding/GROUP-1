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
    $video_trailer = $_POST['video_trailer'];
    $action = $_POST['action'];
    $price = $_POST['price'];

    // get image from input
    $image = $_FILES['image']['name'];

    // Check title and description
    empty($title) || trim($title) == "" ? $errors['title'] = "Please enter title." : "";
    empty($description) || trim($description) == "" ? $errors['description'] = "Please enter description." : "";
    
    // Check image and duration
    empty($image )? $errors['image'] = "Please choose image." : "";
    empty($_POST['duration'])? $errors['duration'] = "Please enter duration." : "";
    
    // Check video_trailer
    empty($video_trailer)? $errors['video_trailer'] = "Please enter video_trailer." : "";
    
    // Check action 
    empty($action) || trim($action) == "" ? $errors['action'] = "Please enter action." : "";

    // Check price
    empty($price)  || $price < 0 ? $errors['price'] = "Please select price." : "";

    // Check address and types
    empty($_POST['address'])? $errors['address'] = "Please enter address." : "";
    empty($_POST['types'])? $errors['types'] = "Please enter types." : "";
    
    if (empty($errors)) {
        // Variables
        $hour  = DateTime::createFromFormat('H:i', $_POST['duration']);  
        $duration = $hour->format('h:i:s');
        echo $duration;
        $address = (int)($_POST['address']);
        $types = (int)($_POST['types']);
        $image_tmp_name=$_FILES['image']['tmp_name'];
        $image_folder='assets/uploaded/'. $image;
        move_uploaded_file($image_tmp_name, $image_folder);

        // Insert a new show
        createShow($title, $description, $image, $duration, $video_trailer, $action, $price, $address, $types);
        header('Location: /seller');
    }

}
require 'views/seller/seller.show.create.view.php';
