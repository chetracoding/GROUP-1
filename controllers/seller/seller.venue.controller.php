<?php
require 'models/seller.model.php';

$venues = getVenuesByUserId($_SESSION['user-id']);

require 'views/seller/seller.venue.view.php';