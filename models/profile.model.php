<?php

function getProfileUserById(string $id) : array
{
global $connection;
$statement = $connection->prepare("select * from users where user_id=:id;");
$statement->execute([
    ':id' => $id,
]);
return $statement->fetch();
}
