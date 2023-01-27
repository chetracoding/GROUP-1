<?php
function getShowsByDate(string $startDate, string $endDate) : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows where date >= :date_start and date <= :date_end");

    $statement->execute([
        ':date_start' => $startDate,
        ':date_end' => $endDate,
    ]);

    return $statement->fetchAll();
}
