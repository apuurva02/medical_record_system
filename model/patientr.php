<?php
        
        $servername = "localhost";
                $user = "root";
                $pass = "Redredred321";
                $dbname = "gh";
                
        
                $conn = new mysqli($servername, $user, $pass, $dbname);
                if ($conn->connect_error) 
                  {
                        die("Connection failed: " . $conn->connect_error);
                  } 
                
                
        if ($stmt = $conn->prepare("SELECT name FROM patient WHERE username=? AND password=?")) 
        {
          
        
        
                         $stmt->bind_param("ss", $username, $password);

                         $stmt->execute();
                        
                         $result = $stmt->fetch();
                         
             if ($result == 1) 
             {
                            session_start();
                            $_SESSION['username']=$username; 
                          
                             
                             
              }
             else 
             {
                   die("Username or Password is invalid");

             }
    
        }
                   

                
                       
       
               
               $conn->close();
               
 ?>