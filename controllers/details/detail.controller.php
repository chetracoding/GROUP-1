<?php
require 'models/detail.model.php';

if (isset($_GET['show_id'])) {
  $id = (int) $_GET['show_id'];
  if (is_int(intval($_GET['show_id']))) {
    
    if (checkShow(intval($_GET['show_id']))) {
      $details = getShowId($id );
      $times = getTimesByShowId($id);
      
    } else {
      require 'views/errors/404.php';
      die();
    }
    
  }
}

$name = getVenue($id);
require "views/details/detail.view.php";