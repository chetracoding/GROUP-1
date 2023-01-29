<?php
require 'models/listshow.model.php';

$today = date("Y-m-d");

$shows = getShowsByDate($today);

require "views/home/home.view.php"; 