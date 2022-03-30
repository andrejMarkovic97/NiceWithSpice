<?php
require "../db/dbBroker.php";
require "../models/Product.php";
include "../debug.php";

session_start();
if (isset($_POST['filter'])) {
    $filter = $_POST['filter'];
    $_SESSION['sort'] = 1;
    $_SESSION['products'] = Product::getAllPriceSorted($conn, $filter);
}
