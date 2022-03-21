<?php

$host = "localhost";
$db = "nicewithspice";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    exit("unsuccessful connection" . $conn->connect_error);
}
