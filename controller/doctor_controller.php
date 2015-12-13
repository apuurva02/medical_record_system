<?php
  class DoctorController
 {
    public function display()
     {
      
      session_start();
     if($_SESSION['username'])
      header('location: view/doctor/profile.php');
      else
      header('location: view/doctor/login.php');
      
    }
    public function patient_list()
     {
      //echo "hiiii";
      include('model/doctor.php');
      $_SESSION['ptList'] = Doctor::list_patient();
      header('location: view/doctor/patient_list.php');
     
    }
    public function prescription()
    { 
      $i = 1;
      while($_POST['med'.$i])
      {
        $prescription[$i][0] = $_POST['med'.$i];
        $prescription[$i][1] = $_POST['dose'.$i];
        $i++;
      }
      //var_dump($prescription);
      require_once('model/appt.php');
      Appt::update($prescription,$_POST['diagnosis']);
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
    public function appt_approve()
    {
      session_start();
      require_once('model/appt.php');
      if(isset($_GET['pid']))
      {
        if($pid=$_GET['pid'])
        { 
          $a = $_GET['app'];
          Appt::approve($pid,$a);
        }
      }
      
      $_SESSION['appts'] = Appt::display();
      header('location: view/doctor/appt_approve.php');
    }

   
  }


 
?>