<?php
$servername = "98.70.33.57"; // Your MySQL server address
$username = "root"; // Your MySQL username
$password = "devilman"; // Your MySQL password (if any)
$dbname = "sql_container"; // Name of the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
