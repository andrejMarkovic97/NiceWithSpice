<?php
require "../db/dbBroker.php";
require "../models/Product.php";



if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $rez = Product::getImageByID($id, $conn);
    $image = "";
    while ($row = $rez->fetch_array()) {
        $image = $row['image'];
    }
    if ($image != "") {
        unlink($image);
    }
    Product::deleteByID($id, $conn);
}
