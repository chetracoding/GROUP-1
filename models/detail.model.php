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
