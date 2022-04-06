<?php

class Cart
{

    public function __construct()
    {
    }

    public static function addToCart($userID, $productID, mysqli $conn)
    {

        $query = "INSERT INTO cart (user_id,product_id) values ('$userID','$productID')";
        return $conn->query($query);
    }

    public static function removeFromCart($userID, $productID, mysqli $conn)
    {
        $query = "DELETE FROM cart WHERE product_id ='$productID' and user_id='$userID'";
        return $conn->query($query);
    }

    public static function getAllById($userID, mysqli $conn)
    {
        $query = "SELECT * from cart where user_id = '$userID'";
        return $conn->query($query);
    }

    public static function deleteFromCartID($userID, mysqli $conn)
    {
        $query = "DELETE FROM cart WHERE user_id ='$userID'";
        return $conn->query($query);
    }
}
