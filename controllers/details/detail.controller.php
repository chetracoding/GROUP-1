<?php
require 'models/detail.model.php';

if (isset($_GET['id'])) {
  $id = (int) $_GET['id'];
  if (is_int(intval($_GET['id']))) {
    
    if (checkShow(intval($_GET['id']))) {
      $details = getShowId($id );
      $times = getTimesById($id);
      $price = getPriceById($id);

    } else {
      require 'views/errors/404.php';
      die();
    }
    
  }
}

// print_r($price);
require "views/details/detail.view.php";
