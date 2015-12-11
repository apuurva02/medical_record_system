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
$sql = "CREATE TABLE admin (
admin_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL, 
password VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
age INT(6) UNSIGNED,
hospital VARCHAR(50) NOT NULL

)";

if ($conn->query($sql) === TRUE) {
    echo "Table admin created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

