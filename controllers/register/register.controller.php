<?php
require 'models/register.model.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    empty($_POST['first-name']) || trim($_POST['first-name']) == "" ? $errors['first-name'] = "Please enter first name." : "";
    empty($_POST['last-name']) || trim($_POST['last-name']) == "" ? $errors['last-name'] = "Please enter first name." : "";

    filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? "": $errors['email'] = "Please a valide email.";

    strlen($_POST['password'] > 8) ? "" : $errors['password'] = "Please enter more than 8 characters.";
    $_POST['password'] == $_POST['confirm-password'] ? "" : $errors['confirm-password'] = "Password not correct.";

    isset($_POST['terms'])? "" : $errors['terms'] = "Please check terms.";


}

require "views/register/register.view.php";