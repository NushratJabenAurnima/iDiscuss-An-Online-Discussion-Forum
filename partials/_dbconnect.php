<?php
//Connecting to the Database
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "idiscuss"; // Add your database name

// Create connection
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>