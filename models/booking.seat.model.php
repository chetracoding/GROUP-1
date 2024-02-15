<?php
function insertTicket(string $creditCard , string $cardExpiration, int $dateId, int $userId): bool 
{
    global $connection;
    $statement = $connection->prepare("insert into ticket (credit_card, card_expiration, release_date_id, user_id) values(:credit_card, :card_expiration,:release_date_id, :user_id)");
    $statement->execute([
        ':credit_card' => $creditCard,
        ':card_expiration' => $cardExpiration,
        ':release_date_id' => $dateId,
        ':user_id' => $userId
    ]);
    return $statement->rowCount() > 0;
}

function insertSeat(string $seatName, int $ticketId): bool 
{
    global $connection;
    $statement = $connection->prepare("insert into seats (seat_name, ticket_id) values (:seat_name, :ticket_id);");
    $statement->execute([
        ':seat_name' => $seatName,
        ':ticket_id' => $ticketId
    ]);
    return $statement->rowCount() > 0;
}

function getTicketIdByUserId(int $userId): array
{
    global $connection;
    $statement = $connection->prepare("select ticket_id from ticket where user_id=:user_id order by ticket_id desc limit 1;");
    $statement->execute([
        ':user_id' => $userId
    ]);
    return $statement->fetch();
}

function getSeatByShowId(int $showId): array
{
    global $connection;
    $statement = $connection->prepare("select seat_row, number_column from show_venue where show_id=:show_id ;");
    $statement->execute([
        ':show_id' => $showId
    ]);
    return $statement->fetch();
}

function getSeatsByDateId(int $dateId): array
{
    global $connection;
    $statement = $connection->prepare("select seat_name from seat_ticket where release_date_id=:date_id ;");
    $statement->execute([
        ':date_id' => $dateId
    ]);
    return $statement->fetchAll();
}

function getTimeById(int $dateId) : array
{
    global $connection;
    $statement = $connection->prepare("select * from release_date_shows where release_date_id=:id;");
    $statement->execute([ ':id' => $dateId ]);
    return $statement->fetch();
}