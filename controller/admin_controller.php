<?php
  class AdminController
 {
    public function display()
     {
      
     
      header('location: view/admin/login.php');
     
    }
   
    public function login()
    {
      require_once('model/admin.php');
      //echo "in login";
      //session_start();
      $user_name=$_POST['username'];
      $pwd=$_POST['password'];
      //$encpwd = sha1($password);
      //echo $username . $password;
      
      Admin::auth($user_name,$pwd);
     // var_dump("yay");
      
      header('location: view/admin/profile.php');
    }
    public function add_patient()
     {
      
     
      header('location: view/admin/add_patient.php');
     
    }
    public function logout()
    {
      header('location: view/admin/logout.php');
    }


   
  }


 
?>