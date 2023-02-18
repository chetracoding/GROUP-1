<?php 
require "models/login.model.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    empty($_POST['email'])? $errorEmail = "Please enter your email address." : "";

    if (! isset($errorEmail)) {
        checkEmail($_POST['email']) ? "" : $errorEmail = "Your email address is not valid.";

        if (checkEmail($_POST['email'])) {
            $email = $_POST['email'];
            $pinCode =  random_int(100000, 999999);
            setPinCodeByEmail($email, $pinCode);
            $_SESSION['email_reset'] = $email;

            header("location: /codesecurity");
        }
    }
}

require "views/recoverpassword/forgotpassword.view.php";