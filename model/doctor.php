<?php


class Doctor {
    
    public $username;
    public $password;
    public $name;
    public $age;
    
    public $hospital;
    public $qualification;


    public function __construct($username, $password, $name, $age, $hospital, $qualification) {
      $this->username      = $username;
      $this->password  = $password;
      $this->name = $name;
      $this->age = $age;
      
      $this->hospital = $hospital;
      $this->qualification = $qualification;
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
               

                          $stmt = $conn->prepare("INSERT INTO doctor (username, password, name, age, hospital, qualification)
                                                VALUES ( ?, ?, ?, ?, ?, ?)");
                          //echo "pliss";
                            // var_dump($this->username);
                            // die();
                         $stmt->bind_param("ssssss", $this->username, $this->password, $this->name, $this->age, $this->hospital, $this->qualification );
                         //die("in save");
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
  }


               
               ?>