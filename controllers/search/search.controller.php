<?php
require "models/search.model.php";

$shows = [];
$text = $_POST['search'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

}

if (empty($shows)) {
    require "views/search/search.view.php";

} else {
    require "views/errors/403.php";
}