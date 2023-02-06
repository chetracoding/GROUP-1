<?php
require 'models/seller.model.php';

$shows = getShowsByUserId($_SESSION['user-id']);

require 'views/seller/seller.view.php';