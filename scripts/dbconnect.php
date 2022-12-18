<?php

function connectDB() {
    // database work
    $host = "localhost";
    $dbname = "p1recipe2022";
    $user = "root";
    $password = "";
    $port = 3306;
    // Create connection
    $conn = new mysqli("localhost", $user, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

?>