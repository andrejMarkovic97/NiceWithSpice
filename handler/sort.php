<?php
require "../db/dbBroker.php";
require "../models/Product.php";


if (isset($_POST['filter'])) {
    $filter = $_POST['filter'];
    $_SESSION['sort'] = 0;
    $_SESSION['products'] = Product::getAllPriceSorted($conn, $filter);
}
