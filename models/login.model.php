<?php
function checkEmail($email) : bool
{
    global $connection;
    $statement = $connection->prepare("select * from users where email=:email;");
    $statement->execute([
        ':email'=> $email
    ]);

    return $statement->rowCount() > 0;
}

function getUserByEmail($email) : array
{
    global $connection;
    $statement = $connection->prepare("select * from users where email=:email;");
    $statement->execute([
        ':email'=> $email,
    ]);

    return $statement->fetch();
}