<?php
function insertTicket(int $totalTicket ,string $creditCard , string $cardExpiration, int $dateId, int $userId): bool 
{
    global $connection;
    $statement = $connection->prepare("insert into ticket (total_tickets, credit_card, card_expiration, release_date_id, user_id) values(:total_tickets,:credit_card, :card_expiration,:release_date_id, :user_id)");
    $statement->execute([
        ':total_tickets' => $totalTicket,
        ':credit_card' => $creditCard,
        ':card_expiration' => $cardExpiration,
        ':release_date_id' => $dateId,
        ':user_id' => $userId
    ]);
    return $statement->rowCount() > 0;
}