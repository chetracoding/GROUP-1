<?php
function getShows() : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows limit 12");
    $statement->execute();
    return $statement->fetchAll();
}