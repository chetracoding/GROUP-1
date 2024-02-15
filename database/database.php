<?php
// !!!! please config this file before start the serve

$hostname = "localhost";
$database = "db_example";
$username = "username";
$password = "";

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$connection = new PDO($dsn, $username, $password);