<?php

require "../db/dbBroker.php";
require "../models/User.php";
require "../models/Product.php";
require "../models/Transaction.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['adress']) && isset($_POST['password'])) {

    $user = new User($_POST['name'], $_POST['email'], $_POST['password'], $_POST['adress']);
}

if (isset($_POST['itemName']) && isset($_POST['price']) && isset($_POST['image'])) {

    $product = new Product($_POST['itemName'], $_POST['price'], $_POST['image']);
    $product->createProduct($this, $conn);
    if ($product) {
        echo "Success";
    } else {
        echo "Failed";
    }
}
