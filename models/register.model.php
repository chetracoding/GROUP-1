<?php

function createUser(string $firstName, string $lastName, string $date, string $address, string $email, string $password) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (first_name, last_name, date_of_bird, address, email, password, role) values (:first_name, :last_name, :date, :address, :email, :password, 'customer');");
    $statement->execute([
        ':first_name' => $firstName,
        ':last_name' => $lastName,
        ':date' => $date,
        ':address' => $address,
        ':email' => $email,
        ':password' => $password
    ]);

    return $statement->rowCount() > 0;
}

function checkEmail(string $email) : bool
{
    global $connection;
    $statement = $connection->prepare("select email from users where email=:email;");
    $statement->execute([
        ':email' => $email,
    ]);

    return $statement->rowCount() > 0;
}

function getUserByEmail(string $email) : array
{
    global $connection;
    $statement = $connection->prepare("select * from users where email=:email;");
    $statement->execute([
        ':email' => $email,
    ]);

    return $statement->fetch();
}