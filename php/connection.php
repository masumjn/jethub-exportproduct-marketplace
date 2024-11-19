<?php

// Database requirements
$host = "localhost";
$username = "root";
$password = "MySQL0606Masum0606";
$database = "jethub";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}