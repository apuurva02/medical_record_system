<?php


class Appt {
    
    public $docid;
    public $pid;
    public $prescription;
    public $diagnosis;
    public $dateappt;
    public $timeappt;


    public function __construct($docid, $pid, $prescription, $diagnosis, $dateappt, $timeappt) {
      $this->docid      = $docid;
      $this->pid  = $pid;
      $this->prescription = $prescription;
      $this->diagnosis = $diagnosis;
      $this->dateappt = $dateappt;
      $this->timeappt = $timeappt;
    }

    public function save()
   {
              
                $servername = "localhost";
                $user = "root";
                $pass = "Redredred321";
                $dbname = "gh";
                
        
                $conn = new mysqli($servername, $user, $pass, $dbname);
                if ($conn->connect_error) 
                  {
                        die("Connection failed: " . $conn->connect_error);
                  } 
               

                          $stmt = $conn->prepare("INSERT INTO appointment (docid, pid, prescription, diagnosis, dateappt, timeappt)
                                                VALUES ( ?, ?, ?, ?, ?, ?,?) WHERE ");
                          //echo "pliss";
                            // var_dump($this->username);
                            // die();
                         $stmt->bind_param("sssssss", $this->docid, $this->pid, $this->prescription, $this->diagnosis, $this->dateappt, $this->timeappt);
                         //die("in save");
                         $stmt->execute();
                         $stmt->close();
        
                
                       
       
               
               $conn->close();      
    }

    public function update($prescription,$diagnosis)
    {
      session_start();
$servername = "localhost";
$username = "root";
$password = "Redredred321";
$dbname = "gh";
$prescription = serialize($prescription);
var_dump($prescription);
$docid=$_SESSION['username'];
$pid=$_SESSION['pid'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE `appointment` SET `prescription`='$prescription', `diagnosis`='$diagnosis' where `docid`='$docid' and `pid`='$pid' and `approved`=1 and `prescription`='0'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

    }
  }


               
               ?>