<?php
require "models/login.model.php";
$errors = [];

if (! isset($_SESSION['email_reset'])) {
    require 'views/errors/404.php';
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    strlen($_POST['new-password']) >= 8 ? "" : $errors['new_password'] = "Please enter password at least 8 characters.";
    $_POST['new-password'] == $_POST['confirm-password'] ? "" : $errors['confirm_password'] = "Incorrect password.";

    if (empty($errors)) {
            $encryptNewPass = password_hash($_POST['new-password'], PASSWORD_BCRYPT);
            updateNewPassword($_SESSION['email_reset'], $encryptNewPass);
            
            session_destroy();
            header("Location: /login");
        }
    
}

require "views/recoverpassword/recoverpassword.view.php";