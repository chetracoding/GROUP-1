<?php
require 'models/seller.model.php';
$errors = [];
// $showId = $_GET['id']
$checkVenues= (checkStartEndtime($_GET['id']));
$getDateStartEndTimes = (getStartEndtime($_GET['id']));
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Variables
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $date = $_POST['date_show'];
    // Check start_time and end_time
    empty($start_time)? $errors['start_time'] = "Please enter start_time." : "";
    empty($end_time)? $errors['end_time'] = "Please enter end_time." : "";
    
    // Check date of show 
    empty( $date)? $errors['date_show'] = "Please select date_show." : "";
    
    if (empty($errors)){
        $isfound = TRUE;
        foreach ($checkVenues as $checkVenue)
        {   
            if($date == $checkVenue['date']){
                if ($start_time >$checkVenue ['end_time'] && $start_time <$checkVenue ['start_time']   !== $checkVenue['start_time'] && $end_time !== $checkVenue['end_time']){
                    $isfound = FALSE;
                }
            }
        }
        if($isfound){
            createTime($date, $start_time, $end_time, $_GET['id']);
            // header('Location: /seller');
        }
        else{
            echo "It's has already";
        }

    }
}
require 'views/seller/seller.show.time.view.php';
?>