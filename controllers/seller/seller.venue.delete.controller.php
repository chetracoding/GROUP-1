<?php
require 'models/seller.model.php';

if (isset($_GET['id'])) {
    deleteVenueById($_GET['id']);
    header ("location: /seller/venue");
}