<?php 
require "models/login.model.php";

if (! isset($_SESSION['email_reset'])) {
    require 'views/errors/404.php';
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    empty($_POST['pin-code'])? $errorCode = "Please enter PIN CODE" : "";
    if (! empty($_POST['pin-code'])) {
        $code = getPinCodeByEmail($_SESSION['email_reset'])['pin_code'];
        ($code == $_POST['pin-code']) ? "" : $errorCode = "PIN CODE is incorrect";

        if ($code == $_POST['pin-code']) {
            header("location: /recoverpassword");
        }
    }
}

require "views/recoverpassword/forgotpassword.code.view.php";