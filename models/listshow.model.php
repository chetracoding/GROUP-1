<?php

function getShowsByDate(string $date) : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows where date >= :date order by date limit 12;");
    $statement->execute([
        ':date' => $date
    ]);
    return $statement->fetchAll();
}