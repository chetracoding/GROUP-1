<?php
// require 'models/register.model.php';

if(isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];
    $terms = $_POST['terms'];

    echo $firstName;
}


require "views/register/register.view.php";