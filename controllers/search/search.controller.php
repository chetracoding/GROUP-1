<?php
require "models/search.model.php";

$today = date("Y-m-d ");
$shows = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $shows = getShowsByTitle($_POST['search'], $today);
}

if (empty($shows)) {
    require "views/errors/noresult.php";
} else {
    require "views/search/search.view.php";
}