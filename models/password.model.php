<?php
function getPasswordByUserId(int $userId) : array
{
    global $connection;
    $statement = $connection->prepare("select password from users where user_id=:user_id;");
    $statement->execute([
        ':user_id'=> $userId
    ]);

    return $statement->fetch();
}

function updatePasswordByUserId(int $userId, string $newPassword) : bool
{
    global $connection;
    $statement = $connection->prepare("update users set password = :new_password where user_id=:user_id;");
    $statement->execute([
        ':new_password'=> $newPassword,
        ':user_id'=> $userId
    ]);

    return $statement->rowCount() > 0;
}