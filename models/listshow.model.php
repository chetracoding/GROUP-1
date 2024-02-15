<?php

function getShowsByDate(string $date) : array
{
    global $connection;
    $statement = $connection->prepare("select * from release_date_shows where date >= :date group by show_id order by date desc limit 12;");
    $statement->execute([
        ':date' => $date
    ]);
    return $statement->fetchAll();
}

function getTypeShow(string $date,int $typeID) : array
{
    global $connection;
    $statement = $connection->prepare("select * from release_date_shows where date >= :date and type_id = :type_id group by show_id;");
    $statement->execute([
        ':date' => $date,
        ':type_id' => $typeID
    ]);
    return $statement->fetchAll();
}