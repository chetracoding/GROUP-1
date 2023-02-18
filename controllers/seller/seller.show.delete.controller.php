<?php
require 'models/seller.model.php';

if (isset($_GET['id'])) {
    if (checkShowTicketsById($_GET['id'])) {
        require 'views/seller/cannot.delete.php';
    } else {
        deleteShowId($_GET['id']);
        header ("location: /seller");
    }
}