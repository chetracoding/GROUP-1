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
function getNameTypes() : array
{
    global $connection;
    $statement = $connection->prepare("select * from type_of_shows ");
    $statement->execute();

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
function getStartEndtime(string $showId) : array
{
    global $connection;
    $statement = $connection->prepare("select date, start_time, end_time  from release_dates where show_id=:id order by date ASC ;");
    $statement->execute([
        ':id' => $showId,
    ]);
    return $statement->fetchAll();
}
function checkStartEndtime(int $showId) : array
{
    global $connection;
    $statement = $connection->prepare("select * from release_dates where show_id = :id;");
    $statement->execute([
        ':id' => $showId,
    ]);
    return $statement->fetchAll(); 

}

function createShows(string $title, string $description, string $image, string $duration, string $video_trailer, string $action, int $number_ticket, string $price, int $address, int $types ) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into shows (title, description, image, duration, video_trailer, action, number_tickets, price, venue_id, type_id) values (:title, :description, :image, :duration, :video_trailer,:action,:number_tickets, :price, :venue_id, :type_id);");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':image' => $image,
        ':duration' => $duration,
        ':video_trailer' => $video_trailer,
        ':action' => $action,
        ':number_tickets' => $number_ticket,
        ':price' => $price,
        ':venue_id' => $address,
        ':type_id' => $types
    ]);
    return $statement->rowCount() > 0;
}

function createTime(string $date, string $start_time, string $end_time, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into release_dates (date, start_time, end_time, show_id) values (:date, :start_time, :end_time,:show_id) ;");
    $statement->execute([
        ':date' => $date,
        ':start_time' => $start_time,
        ':end_time' => $end_time,
        ':show_id' => $id
    ]);
    return $statement->rowCount() > 0;
}
function createVenue(string $name, string $address, string $userId,) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into venues (name, venue_address, user_id) values (:name, :address,:user_id) ;");
    $statement->execute([
        ':name' => $name,
        ':address' => $address,
        ':user_id' => $userId,
    ]);
    return $statement->rowCount() > 0;
}
