<?php


class Appt {
    
    public $docid;
    public $pid;
    public $pname;
    public $reason;
    public $approved;
    public $prescription;
    public $diagnosis;
    public $dateappt;
    public $timeappt;


    public function __construct($docid, $pid, $pname, $reason, $approved, $prescription, $diagnosis, $dateappt, $timeappt) {
      $this->docid      = $docid;
      $this->pid  = $pid;
      $this->pname = $pname;
      $this->reason  = $reason;
      $this->approved  = $approved;
      $this->prescription = $prescription;
      $this->diagnosis = $diagnosis;
      $this->dateappt = $dateappt;
      $this->timeappt = $timeappt;
    }

    public function save()
   {
              session_start();
                $servername = "localhost";
                $user = "root";
                $pass = "Redredred321";
                $dbname = "gh";
                
                $pid=$_SESSION['username'];
                $pname=$_SESSION['pname'];
                $reason = $_POST['reason'];
                $dateappt = $_POST['dateappt'];
                $timeappt = $_POST['timeappt'];


        
              $conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$docid=$conn->query("SELECT * from patient WHERE username='$pid'");
$docid=$docid->fetch_assoc();
$docid=$docid['doctor'];

var_dump($docid);
$sql = "INSERT INTO appointment (docid, pid, pname, reason, dateappt, timeappt, approved)
VALUES ('$docid', '$pid', '$pid', '$reason', '$dateappt', '$timeappt' ,0 )";

if ($conn->query($sql) === TRUE) {
    echo "Appointment sent successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
     
    }
public function approve($pid,$a)
{
  // session_start();
$servername = "localhost";
$username = "root";
$password = "Redredred321";
$dbname = "gh";

$docid=$_SESSION['username'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE `appointment` SET `approved`=$a  where `docid`='$docid' and `pid`='$pid' and `approved`=0";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

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
header('location: view/doctor/appt_approve.php');
    }

    public function display()
    {
     // session_start();
$servername = "localhost";
$username = "root";
$password = "Redredred321";
$dbname = "gh";

$docid=$_SESSION['username'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `pid`, `pname`, `reason`, `dateappt`, `timeappt` FROM appointment WHERE `docid`='anu' and `approved`=0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $i=0;
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $arr[$i]=$row;   
       $i++;
     }
  }
  return $arr;
$conn->close();

  }

  public function medication()
    {
     // session_start();
$servername = "localhost";
$username = "root";
$password = "Redredred321";
$dbname = "gh";
session_start();
$pid=$_SESSION['username'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `reason`, `prescription`, `diagnosis`, `dateappt`, `timeappt` FROM appointment WHERE  `pid`='$pid' AND `approved`=1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $i=0;
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $arr[$i]=$row;   
       $i++;
     }
  }
  return $arr;
$conn->close();

  }

}


               
               ?>