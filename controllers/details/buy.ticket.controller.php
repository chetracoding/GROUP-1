<?php
require 'models/ticket.buy.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST["show-time"]) && !empty($_POST["number-tickets"]) && !empty($_POST["number-card"]) && !empty($_POST["card-expiration"])) {
        insertTicket($_POST["number-tickets"], $_POST["number-card"], $_POST["card-expiration"], $_POST["show-time"], $_SESSION["user-id"]);
    }
}
header('Location: /');