<?php
require "models/search.model.php";

$shows = [];
$text = $_POST['search'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $shows = getShowsByTitle($text);
}

if (empty($shows)) {
    require "views/errors/403.php";
} else {
    require "views/search/search.view.php";
}