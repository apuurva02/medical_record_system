<?php


class Doctor {
     public $aadhaar_no;
    public $username;
    public $password;
    public $name;
    public $age;
    public $hospital;
    public $qualification;
    public $speciality;


    public function __construct($aadhaar_no,$username, $password, $name, $age, $hospital, $qualification,$speciality) {
      $this->aadhaar_no = $aadhaar_no;
      $this->username      = $username;
      $this->password  = $password;
      $this->name = $name;
      $this->age = $age;
      $this->hospital = $hospital;
      $this->qualification = $qualification;
      $this->speciality = $speciality;
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
               var_dump($this->username);

                          $stmt = $conn->prepare("INSERT INTO doctor (aadhaar_no,username, password, name, age, hospital, qualification, speciality) VALUES ( ?,?,?, ?, ?, ?, ?, ?)");
                          //echo "pliss";
                             
                            // die();
                          var_dump($stmt);
                         $stmt->bind_param("ssssssss", $this->aadhaar_no,$this->username, $this->password, $this->name, $this->age, $this->hospital, $this->qualification, $this->speciality );
                         
                         echo("in save");
                         $stmt->execute();
                         $stmt->close();
        
                
                       
       
               
               $conn->close();      
    }

     public function auth($username,$password)
    {
               //echo"in auth"; 
                $servername = "localhost";
                $user = "root";
                $pass = "Redredred321";
                $dbname = "gh";
                
        
                $conn = new mysqli($servername, $user, $pass, $dbname);
                if ($conn->connect_error) 
                  {
                        die("Connection failed: " . $conn->connect_error);
                  } 
                
                
        if ($stmt = $conn->prepare("SELECT name FROM doctor WHERE username=? AND password=?")) 
        {
          
        
        
                         $stmt->bind_param("ss", $username, $password);

                         $stmt->execute();
                        
                         $result = $stmt->fetch();
                         
             if ($result == 1) 
             {
              //die("logged in");
                            session_start();
                            $_SESSION['username']=$username;
                            $_SESSION['user_type']="doctor"; 
                            
                          
                             
                             
              }
             else 
             {
                   die("Username or Password is invalid");

             }
    
        }
                   

                
                       
       
               
               $conn->close();
    }

    function list_patient()
    {
$servername = "localhost";
$username = "root";
$password = "Redredred321";
$dbname = "gh";

// Create connection
session_start();
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$doctor =$_SESSION['username'];
$sql="SELECT name, age FROM patient WHERE doctor='$doctor'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - age: " . $row["age"];
    }
}
 else {
    echo "0 results";
}
$conn->close();
  }
}

               
?>