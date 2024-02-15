
<?php
function getTicketById(int $ticketId) : array
{
    global $connection;
    $statement = $connection->prepare("select customer_tickets.*, count(customer_tickets.seat_id) as 'total_seats', users.first_name, users.last_name from customer_tickets INNER JOIN users ON customer_tickets.user_id = users.user_id where ticket_id=:id group by ticket_id ;");
    $statement->execute([':id' => $ticketId]);
    return $statement->fetch();
}
function getSeatTicketById(int $ticketId) : array
{
    global $connection;
    $statement = $connection->prepare("select seat_name from customer_tickets where ticket_id=:id;");
    $statement->execute([':id' => $ticketId]);
    return $statement->fetchAll();
}
function checkTticketById(int $userId, int $ticketId) : bool
{
    global $connection;
    $statement = $connection->prepare("select ct.*, count(ct.seat_id) as 'total_seats' from customer_tickets ct where user_id = :user_id group by ticket_id = :ticket_id;");
    $statement->execute([
        ':user_id' => $userId,
        ':ticket_id' => $ticketId
    ]);
    return $statement->rowCount() > 0;
}