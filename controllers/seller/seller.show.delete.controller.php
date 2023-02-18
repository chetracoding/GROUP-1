<?php
require 'models/seller.model.php';

if (isset($_GET['id'])) {
    deleteShowId($_GET['id']);
    header ("location: /seller");
}