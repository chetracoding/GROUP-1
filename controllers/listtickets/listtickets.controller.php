<?php
require 'models/listtickets.model.php';

if(isset($_SESSION['user-id'])) {  
    
    $tickets = getTicketsByUserId($_SESSION['user-id']);
}

require 'views/listtickets/listtickets.view.php';