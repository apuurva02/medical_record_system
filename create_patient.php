<?php
$servername = "localhost";
$username = "root";
$password = "Redredred321";
$dbname = "gh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE patient (
pid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL, 
password VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
age INT(6) UNSIGNED,
emergency_contact INT(25) UNSIGNED,
doctor VARCHAR(50) NOT NULL,
hospital VARCHAR(50) NOT NULL,
medical_condition VARCHAR(50),
medical_history VARCHAR(500)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table patient created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

