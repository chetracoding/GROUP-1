<?php
require "models/searchdate.model.php";

$shows = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (! empty($_POST['start-date']) &&! empty($_POST['end-date'])) {
        $shows = getShowsByDate($_POST['start-date'], $_POST['end-date']);
        if (empty($shows)) {
            require "views/errors/noresult.php";
            die();
        }
    }
};

require "views/searchdate/searchdate.view.php";