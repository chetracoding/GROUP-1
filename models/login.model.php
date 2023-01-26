<?php
function getEmail($email) : bool
{
    global $connection;
    $statement = $connection->prepare("select * from users where email=:email;");
    $statement->execute([
        ':email'=> $email
    ]);

    return $statement->rowCount() > 0;
}


function getPasswordByEmail($email) : array
{
    global $connection;
    $statement = $connection->prepare("select password from users where email=:email;");
    $statement->execute([
        ':email'=> $email,
    ]);

    return $statement->fetch();
}