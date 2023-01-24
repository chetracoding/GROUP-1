<?php
session_start();
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
        if (getDataUser($_POST['email'], $_POST['password'])) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
    
            header('location: /');
        } else {
            $errors['incorrect'] = "Incorrect password.";
        }
    }
}

require "views/login/login.view.php";