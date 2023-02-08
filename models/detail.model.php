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

function getTimesById(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select release_date_id, date, start_time, end_time from release_date_shows where show_id=:id;");
    $statement->execute([ ':id' => $id ]);
    return $statement->fetchAll();
}


function getPriceById(int $id)
{
    global $connection;
    $statement = $connection->prepare("select price from shows where show_id=:id;");
    $statement->execute([ ':id' => $id ]);
    return $statement->fetch();
}