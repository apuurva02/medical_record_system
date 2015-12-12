<?php


class Admin {
    
     

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
                
                
        if ($stmt = $conn->prepare("SELECT name FROM admin WHERE username=? AND password=?")) 
        {
          
        
        
                         $stmt->bind_param("ss", $username, $password);

                         $stmt->execute();
                        
                         $result = $stmt->fetch();
                         
             if ($result == 1) 
             {
              //die("logged in");
                            session_start();
                            $_SESSION['username']=$username;
                            $_SESSION['user_type']="admin"; 
                            
                          
                             
                             
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