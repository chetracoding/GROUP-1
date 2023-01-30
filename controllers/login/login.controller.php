<?php
session_start();
require "models/login.model.php";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check email
    empty($_POST['email'])? $errors['email'] = "Please enter email." : "";

    // Check password
    empty($_POST['password'])? $errors['password'] = "Please enter password." : "";

    // Validate email and password
    if (empty($errors)) {
        if (getEmail($_POST['email'])) {
            $encrypt = getPasswordByEmail($_POST['email'])['password'];
            if (password_verify($_POST['password'], $encrypt)) {
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['first-name'] = getFirstNameByEmail($_POST['email'])['first_name'];
                header('location: /');
            }
            else {
                $errors['incorrect-password'] = "Incorrect password.";
            }
        } else {
            $errors['incorrect-email'] = "Incorrect email.";
        }
    }
}

require "views/login/login.view.php";