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

function getShowsByUserId(string $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from seller_shows where user_id=:id;");
    $statement->execute([
        ':id' => $id,
    ]);
    return $statement->fetchAll();
}

function deleteShowId(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from shows where show_id=:id;");
    $statement->execute([':id' => $id,]);
    return $statement->rowCount() > 0;
}

function checkShowTicketsById(int $showId) : bool
{
    global $connection;
    $statement = $connection->prepare("select * from show_tickets where show_id=:id;");
    $statement->execute([ ':id' => $showId ]);
    return $statement->rowCount() > 0;
}