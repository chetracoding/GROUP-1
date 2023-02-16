<?php
require 'models/seller.model.php';
// Get name of venue from database
$getNameVenues = getVenuesByUserId($_SESSION['user-id']);
// Get name of type_of_show  from database
$getNameTypes =  getNameTypes();
require 'views/seller/seller.show.edit.view.php';
