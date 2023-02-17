<?php
require 'models/detail.model.php';
require 'models/booking.seat.model.php';

// FUNCTION
function convertSimpleArray($associativeArray, $column) : array
{
    $simpleArray = array(); //simple array

    foreach($associativeArray as $item)
    {
        $simpleArray[]=$item[$column];   
    }
    return $simpleArray;
}

// VARIABLES
$errors = [];
$showId = $_GET['show_id'];
$seat = getSeatByShowId($showId);
$seatRow = $seat['seat_row'];
$numberColumn = $seat['number_column'];

$time = getTimeById($_GET['date_id']);
$seatBooked = convertSimpleArray(getSeatsByDateId($_GET['date_id']), 'seat_name');

if (! isset($_SESSION['user-id'])) {
    header("Location: /login");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    empty($_POST['seat'])? $errors['error_seat'] = 'Not Found' : '';
    empty($_POST['number-card'])? $errors['error_card'] = 'No card number' : '';
    empty($_POST['card-expiration'])? $errors['error_card_expiration'] = 'No card expiration' : '';
    
    if (empty($errors)) {
        insertTicket($_POST['number-card'], $_POST['card-expiration'], $_GET['date_id'], $_SESSION['user-id']);

        $ticketId = getTicketIdByUserId($_SESSION['user-id'])['ticket_id'];
        foreach ($_POST['seat'] as  $seat) {
            insertSeat($seat, $ticketId);
        }

        header("Location: /detail?show_id=$showId");
    }
}
require "views/details/booking.seat.view.php";