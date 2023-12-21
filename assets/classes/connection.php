<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamelibrarytracker";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   // echo 'Connection Stable'; for if you need to check its working
}

?>
