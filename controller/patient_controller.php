<?php
  class PatientController
 {
    public function display()
     {
      
     
      header('location: view/patient/login.php');
     
    }
    public function register()
    {
      header('location: view/patient/register.php');
    }
    public function insert()
    {
      //echo "in insert controller";
      include('model/patient.php');
      $patient = new Patient($_POST["username"],$_POST["password"],$_POST["name"],$_POST["age"],$_POST["contact"],$_POST["doctor"],$_POST["hospital"]);
      // var_dump($patient);
      // die();
     $patient->save();
      
      
      header('location: view/patient/registered.php');

    }
    public function login()
    {
      require_once('model/patient.php');
      //echo "in login";
      //session_start();
      $user_name=$_POST['username'];
      $pwd=$_POST['password'];
      //$encpwd = sha1($password);
      //echo $username . $password;
      //Patient::auth("aditi","asd");
      Patient::auth($user_name,$pwd);
     // var_dump("yay");
      
      header('location: view/patient/profile.php');
    }


    public function upload()
    {
      echo"controller";
      header('location: view/patient/upload.php');
    }
    
    public function file_save()
    {
$uploaddir = 'F:\\wamp\\www\\GH\\uploads\\';

$ext = explode("/", $_FILES["uploadfiles"]["type"])[1];

$target_file_name = $_POST['filename'].".".$ext;

$target_file=$uploaddir.$target_file_name;
move_uploaded_file($_FILES["uploadfiles"]["tmp_name"], $target_file);
echo "FILE UPLOADED SUCCESSFULLY!";



}
public function logout()
{
header('location: view/patient/logout.php');  

  }
}


 
?>