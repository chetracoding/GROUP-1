<?php
function getShowId(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from release_date_shows where show_id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function checkShow(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("select * from release_date_shows where show_id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}

function getTimesByShowId(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from release_date_shows where show_id=:id;");
    $statement->execute([ ':id' => $id ]);
    return $statement->fetchAll();
}

function getVenue(int $id): array
{
    global $connection;
    $statement = $connection->prepare("select name from venues inner join shows on shows.venue_id = venues.venue_id where show_id = :id;");
    $statement->execute([ ':id' => $id ]);
    return $statement->fetch();
}