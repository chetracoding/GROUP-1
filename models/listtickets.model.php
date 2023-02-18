<?php

function getTicketsByUserId(int $userId) : array
{
    global $connection;
    $statement = $connection->prepare("select ct.*, count(ct.seat_id) as 'total_seats' from customer_tickets ct where user_id = :user_id group by ticket_id;");
    $statement->execute([':user_id' => $userId]);
    
    return $statement->fetchAll();
}