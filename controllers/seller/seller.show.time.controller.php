<?php
require 'models/seller.model.php';
$errors = [];

$checkVenues= checkStartEndtime($_GET['id']);
$times = getTimesByshowId($_GET['id']);
$duration = getShowById($_GET['id'])['duration'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Variables
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $date = $_POST['date_show'];
    $venueId = getShowById($_GET['id'])['venue_id'];

    // Check start_time and end_time
    empty($start_time)? $errors['start_time'] = "Please enter start time." : "";

    empty($end_time)? $errors['end_time'] =  "Please enter end time." : "";
    
    // Check date of show 
    empty( $date)? $errors['date_show'] = "Please select date show." : "";
    
    $checkTimes = checkReleaseTimes($date,  $start_time, $end_time, $venueId);

    ($checkTimes == true)? $errors['start_time'] = "This time already created in your venue." : ""; 

    if (! $checkTimes && empty($errors)) {
        createTime($date, $start_time, $end_time, $_GET['id']);
        $showId = $_GET['id'];
        header("Location: /seller/time?id=$showId");
    }
}
require 'views/seller/seller.show.time.view.php';
?>