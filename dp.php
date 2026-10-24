<?php

$conn = mysqli_connect("localhost", "root", "", "cyber_safety");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
