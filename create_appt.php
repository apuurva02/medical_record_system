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
pid INT(6),
doc_id INT(6),
appt_date Date,
appt_time Time


)";

if ($conn->query($sql) === TRUE) {
    echo "Table appointment created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

