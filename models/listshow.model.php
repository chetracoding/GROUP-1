<?php

function getShowsByDate(string $date) : array
{
    global $connection;
    $statement = $connection->prepare("select * from release_date_shows where date >= :date order by date desc limit 12;");
    $statement->execute([
        ':date' => $date
    ]);
    return $statement->fetchAll();
}