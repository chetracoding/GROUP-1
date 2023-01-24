<?php
// require 'models/register.model.php';
$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $lastName = $_POST['lastName'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $passwordConfirm = $_POST['passwordConfirm'];
    // $terms = $_POST['terms'];
    // if (! isset($_POST['firstName'])) {
    //     $errors['firstName'] = "Please enter";
    // }
    echo json_encode(['code'=>404, 'errors'=>$errors]);
    
}



require "views/register/register.view.php";