<?php

// parametros conexion
$servername = "localhost";
$username = "php";
$password = "qwertyuiop88P_";
$dbname = "uf1845";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>