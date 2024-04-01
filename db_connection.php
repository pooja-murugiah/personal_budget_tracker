<?php
$host = 'localhost'; // Host name
$db_user = 'root'; // MySQL username
$db_pass = ' '; // MySQL password
$db_name = 'budget_tracker'; // database name

// Create connection
$conn = new mysqli($host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

