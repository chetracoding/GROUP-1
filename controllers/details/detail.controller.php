<?php
require 'models/detail.model.php';

if (isset($_GET['id'])) {
  $id = (int) $_GET['id'];
  if (is_int(intval($_GET['id']))) {
    
    if (checkShow(intval($_GET['id']))) {
      $details = getShowId($id );
      $times = getTimesById($id);
      
    } else {
      require 'views/errors/404.php';
      die();
    }
    
  }
}

$name = getVenue($id);

// $venue = getVenue();
// print_r($venue);
require "views/details/detail.view.php";
