<?php

function getVenuesByUserId(string $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from venues where user_id=:id order by venue_id desc;");
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
    $statement = $connection->prepare("select * from seller_shows where user_id=:id order by show_id desc;");
    $statement->execute([
        ':id' => $id,
    ]);
    return $statement->fetchAll();
}

function deleteShowId(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from shows where show_id=:id;");
    $statement->execute([':id' => $id,]);
    return $statement->rowCount() > 0;
}

function getTimesByshowId(string $showId) : array
{
    global $connection;
    $statement = $connection->prepare("select * from release_dates where show_id=:id order by date desc;");
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
function checkReleaseTimes(string $date, string $startTime, string $endTime, int $venueId) : bool
{
    global $connection;
    $statement = $connection->prepare("select title, date, start_time, end_time from release_date_shows where (start_time between :start_time and :end_time or end_time between :start_time and :end_time) and date=:date and venue_id=:venue_id;");
    $statement->execute([
        'date' => $date,
        'start_time' => $startTime,
        'end_time' => $endTime,
        'venue_id' => $venueId
    ]);
    return $statement->rowCount() > 0;
}
function createShow(string $title, string $description, string $image, string $duration, string $video_trailer, string $action, string $price, int $address, int $types ) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into shows (title, description, image, duration, video_trailer, action, price, venue_id, type_id) values (:title, :description, :image, :duration, :video_trailer,:action,:price, :venue_id, :type_id);");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':image' => $image,
        ':duration' => $duration,
        ':video_trailer' => $video_trailer,
        ':action' => $action,
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
function createVenue(string $name, string $address, string $seatRow, int $numberColumn, string $userId,) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into venues (name, venue_address, seat_row, number_column, user_id) values (:name, :address, :seat_row, :number_column, :user_id) ;");
    $statement->execute([
        ':name' => $name,
        ':address' => $address,
        ':seat_row' => $seatRow,
        ':number_column' => $numberColumn,
        ':user_id' => $userId,
    ]);
    return $statement->rowCount() > 0;
}
function getShowById(string $showId) : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows where show_id=:id;");
    $statement->execute([
        ':id' => $showId,
    ]);
    return $statement->fetch();
}
function getVenue(string $showId) : array
{
    global $connection;
    $statement = $connection->prepare("select * from venues where venue_id=:id;");
    $statement->execute([
        ':id' => $showId,
    ]);
    return $statement->fetch();
}
function updateShow(string $showId, string $title, string $description, string $image, string $duration, string $videoTrailer, string $action, string $price, int $address, int $type) : bool
{
    global $connection;
    $statement = $connection->prepare("update shows set title = :title, description = :description , image =:image, duration=:duration, video_trailer=:video_trailer, action=:action, price=:price ,venue_id = :venue_id, type_id =:type_id where show_id = :id;");
    $statement->execute([
        ':id' => $showId,
        ':title' => $title,
        ':description' => $description,
        ':image' => $image,
        ':duration' => $duration,
        ':video_trailer' => $videoTrailer,
        ':action' => $action,
        ':price' => $price,
        ':venue_id' => $address,
        ':type_id' => $type
    ]);
    return $statement->rowCount() > 0;
}
function UpdateVenue(int $venueId, string $name , string $address, string $seatRow, int $seatColumn) : bool
{
    global $connection;
    $statement = $connection->prepare("update venues set name = :name, venue_address = :venue_address, seat_row=:seat_row, number_column=:number_column where venue_id = :id;");
    $statement->execute([
        ':id' => $venueId,
        ':name' => $name,
        ':venue_address' => $address,
        ':seat_row' => $seatRow,
        ':number_column' => $seatColumn
    ]);
    return $statement->rowCount() > 0;
}
function deleteTimeById(int $timeId) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from release_dates where release_date_id=:time_id;");
    $statement->execute([ ':time_id' => $timeId]);
    return $statement->rowCount() > 0;
}
function getTimeById(int $timeId) : array
{
    global $connection;
    $statement = $connection->prepare("select * from release_dates where release_date_id=:time_id;");
    $statement->execute([ ':time_id' => $timeId]);
    return $statement->fetch();
}
function updateTime(string $date, string $start_time, string $end_time, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update release_dates set date = :date, start_time = :start_time, end_time = :end_time where release_date_id = :id");
    $statement->execute([
        ':date' => $date,
        ':start_time' => $start_time,
        ':end_time' => $end_time,
        ':id' => $id,
    ]);
    return $statement->rowCount() > 0;
}
function deleteVenueById(int $venueId) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from venues where venue_id=:id;");
    $statement->execute([ ':id' => $venueId]);
    return $statement->rowCount() > 0;
}
