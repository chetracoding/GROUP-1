<?php 
require "models/profile.model.php";

$profile  = getProfileUserById($_SESSION['user-id']);

require "views/profile/profile.view.php";