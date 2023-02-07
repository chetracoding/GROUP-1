<?php

function getVenuesByUserId(string $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from venues where user_id=:id;");
    $statement->execute([
        ':id' => $id,
    ]);
    return $statement->fetchAll();
}
function getNameTypes() : array
{
    global $connection;
    $statement = $connection->prepare("select * from type_of_shows ");
    $statement->execute();

    return $statement->fetchAll();
}

function getShowsByUserId(string $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from seller_shows where user_id=:id;");
    $statement->execute([
        ':id' => $id,
    ]);
    return $statement->fetchAll();
}