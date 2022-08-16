<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mealwell_db";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        echo "Connection Failed.";
    }
?>