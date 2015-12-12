<?php
  class DoctorController
 {
    public function display()
     {
      
      
      header('location: view/doctor/login.php');
      
    }
    public function patient_list()
     {
      echo "hiiii";
      include('model/doctor.php');
      Doctor::list_patient();
      //header('location: view/doctor/profile.php');
     
    }
    public function register()
    {
      header('location: view/doctor/register.php');
    }
    public function insert()
    {
      //echo "in insert controller";
      include('model/doctor.php');
      
      

      //echo "saving";
        $doctor = new Doctor($_POST["aadhaar"],$_POST["username"],$_POST["password"],$_POST["name"],$_POST["age"],$_POST["hospital"],$_POST["qualification"],$_POST["speciality"]);
        $doctor->save();
      
      
     
      
      
      header('location: view/doctor/registered.php');

    }
    public function login()
    {
      require_once('model/doctor.php');
      //echo "in login";
      //session_start();
      $user_name=$_POST['username'];
      $pwd=$_POST['password'];
      //$encpwd = sha1($password);
      //echo $username . $password;
      
      Doctor::auth($user_name,$pwd);
     // var_dump("yay");
      
      header('location: view/doctor/profile.php');
    }
    public function logout()
    {
      header('location: view/doctor/logout.php');
    }


   
  }


 
?>