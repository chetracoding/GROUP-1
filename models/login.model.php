<?php
function checkEmail(string $email) : bool
{
    global $connection;
    $statement = $connection->prepare("select * from users where email=:email;");
    $statement->execute([
        ':email'=> $email
    ]);

    return $statement->rowCount() > 0;
}

function getUserByEmail(string $email) : array
{
    global $connection;
    $statement = $connection->prepare("select * from users where email=:email;");
    $statement->execute([
        ':email'=> $email,
    ]);

    return $statement->fetch();
}

function setPinCodeByEmail(string $email, int $code) : bool
{
    global $connection;
    $statement = $connection->prepare("update users set pin_code = :pin_code where email=:email;");
    $statement->execute([
        ':email'=> $email,
        ':pin_code'=> $code
    ]);

    return $statement->rowCount() > 0;
}

function getPinCodeByEmail(string $email) : array
{
    global $connection;
    $statement = $connection->prepare("select pin_code from users where email=:email;");
    $statement->execute([
        ':email'=> $email
    ]);

    return $statement->fetch();
}


function updateNewPassword(string $email, string $encryptNewPass) : bool
{
    global $connection;
    $statement = $connection->prepare("update users set password = :password  where email=:email;");
    $statement->execute([
        ':email'=> $email,
        ':password'=> $encryptNewPass,
    ]);
    return $statement->rowCount() > 0;
}