<?php
require "models/login.model.php";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['email'])) {
        $errors['email'] = "Please enter email.";
    }
    if (empty($_POST['password'])) {
        $errors['password'] = "Please enter password.";
    }

    if (empty($errors)) {
        if (checkEmail($_POST['email'])) {
            $encrypt = getUserByEmail($_POST['email'])['password'];
            if (password_verify($_POST['password'], $encrypt)) {
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['role'] = getUserByEmail($_POST['email'])['role'];
                $_SESSION['user-id'] = getUserByEmail($_POST['email'])['user_id'];
                $_SESSION['first-name'] = getUserByEmail($_POST['email'])['first_name'];
                header('location: /');
            } else {
                $errors['incorrect-password'] = "Incorrect password.";
            }
        } else {
            $errors['incorrect-email'] = "Incorrect email.";
        }
    }
}

require "views/login/login.view.php";