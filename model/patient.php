<?php

       /* $servername = "localhost";
                $user = "root";
                $pass = "Redredred321";
                $dbname = "gh";
                
        
                $conn = new mysqli($servername, $user, $pass, $dbname);
                if ($conn->connect_error) 
                  {
                        die("Connection failed: " . $conn->connect_error);
                  } 
               
                          $stmt = $conn->prepare("INSERT INTO patient (username, password, name, age, doctor, hospital)
                                                VALUES ( ?, ?, ?, ?, ?, ?)");
                       
                         $stmt->bind_param("ssssss", $username, $password, $name, $age, $doctor, $hospital );
                         $stmt->execute();
                         $stmt->close();
        
                
                       
       
               
               $conn->close();

               $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM posts');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['id'], $post['author'], $post['content']);
      }

      return $list;*/

class Patient {
    
    public $username;
    public $password;
    public $name;
    public $age;
    public $contact;
    public $doctor;
    public $hospital;


    public function __construct($username, $password, $name, $age, $contact, $doctor, $hospital) {
      $this->username      = $username;
      $this->password  = $password;
      $this->name = $name;
      $this->age = $age;
      $this->contact = $contact;
      $this->doctor = $doctor;
      $this->hospital = $hospital;
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
               

                          $stmt = $conn->prepare("INSERT INTO patient (username, password, name, age, emergency_contact, doctor, hospital)
                                                VALUES ( ?, ?, ?, ?, ?, ?,?)");
                          //echo "pliss";
                            // var_dump($this->username);
                            // die();
                         $stmt->bind_param("sssssss", $this->username, $this->password, $this->name, $this->age, $this->contact, $this->doctor, $this->hospital );
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
                
                
        if ($stmt = $conn->prepare("SELECT name FROM patient WHERE username=? AND password=?")) 
        {
          
        
        
                         $stmt->bind_param("ss", $username, $password);

                         $stmt->execute();
                        
                         $result = $stmt->fetch();
                         
             if ($result == 1) 
             {
              //die("logged in");
                            session_start();
                            $_SESSION['username']=$username;
                            $_SESSION['user_type']="patient"; 
                            
                          
                             
                             
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