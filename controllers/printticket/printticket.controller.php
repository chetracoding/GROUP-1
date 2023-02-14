<?php require 'models/printticket.model.php';?>
<?php
    if (isset($_GET['id'])) {
        $userId =  $_SESSION['user-id'];
        $ticketTd = (int) $_GET['id'];
        if (checkTticketById($userId, $ticketTd)) {
            $ticket = getTicketById($ticketTd);
        } else {
            require 'views/errors/404.php';
            die();
        }
    }
?>
<?php require "views/printticket/printticket.view.php"?>;