<?php
require 'models/seller.model.php';
if (isset($_GET['id'])) {
    deleteTimeById($_GET['id']);
    $showId = $_GET['show_id'];
    header("Location: /seller/time?id=$showId");
}