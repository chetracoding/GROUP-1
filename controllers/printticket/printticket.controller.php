<?php require 'models/printticket.model.php';?>
<?php
    if (isset($_GET['id'])) {
        $userId =  $_SESSION['user-id'];
        $ticketId = (int) $_GET['id'];
        
        if (checkTticketById($userId, $ticketId)) {
            $seats = getSeatTicketById($ticketId);
            $ticket = getTicketById($ticketId);
        } else {
            require 'views/errors/404.php';
            die();
        }
    }
?>
<?php require "views/printticket/printticket.view.php"?>;