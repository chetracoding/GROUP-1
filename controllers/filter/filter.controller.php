<?php 
require 'models/listshow.model.php';

$today = date("Y-m-d");
$types = array(
    "/Cinema"=> 1, 
    "/Comedy"=>2, 
    "/Musical"=>3,
    "/Classical"=>4,
    "/Drama"=>5,
    "/Concert"=>6
);

$typeId = $types[$_SERVER['REQUEST_URI']];
$shows = getTypeShow($today, $typeId);

require "views/home/home.view.php";