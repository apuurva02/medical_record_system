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
$sql = "CREATE TABLE appointment (

docid VARCHAR(20),
pid VARCHAR(20),
approved TINYINT(1),
prescription VARCHAR(500) DEFAULT '0',
diagnosis VARCHAR(200),
dateappt Date,
timeappt Time


)";

if ($conn->query($sql) === TRUE) {
    echo "Table appointment created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

