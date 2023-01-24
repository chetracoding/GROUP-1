<?php

function getDataUser($email, $password) : bool
{
    global $connection;
    $statement = $connection->prepare("select * from users where email=:email and password=:password;");
    $statement->execute([
        ':email'=> $email,
        ':password'=> $password
    ]);

    return $statement->rowCount() > 0;
}