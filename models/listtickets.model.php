<?php

function getTicketsByUserId(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from customer_tickets where user_id=:id;");
    $statement->execute([':id' => $id]);
    
    return $statement->fetchAll();
}