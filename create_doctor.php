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
$sql = "CREATE TABLE doctor (
doc_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL, 
password VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
age INT(6) UNSIGNED,
patient_list VARCHAR(150) NOT NULL,
hospital VARCHAR(50) NOT NULL,
qualification VARCHAR(50),
medical_certificate VARCHAR(500)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table doctor created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

