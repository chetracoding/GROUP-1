<?php
function getShowsByDate(string $startDate, string $endDate) : array
{
    global $connection;
    $statement = $connection->prepare("select * from release_date_shows where date >= :date_start and date <= :date_end group by show_id");

    $statement->execute([
        ':date_start' => $startDate,
        ':date_end' => $endDate,
    ]);

    return $statement->fetchAll();
}
