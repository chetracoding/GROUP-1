<?php
$statement = $connection->prepare("select * from customer_tickets where ticket_id=:id;");
    $statement->execute([':id' => $ticketId]);
    return $statement->fetch();

function checkTticketById(int $userId, int $ticketId) : bool
{
    global $connection;
    $statement = $connection->prepare("select * from customer_tickets where ticket_id=:ticket_id and user_id=:user_id;");
    $statement->execute([
        ':user_id' => $userId,
        ':ticket_id' => $ticketId
    ]);
    return $statement->rowCount() > 0;
}