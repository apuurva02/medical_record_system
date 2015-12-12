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
      //echo "save";
     /* session_start();
      $username = $_SESSION['username'];
      // $path = "uploads" . '/' . $username;
      // mkdir($path);
      $target_dir = "uploads/";

$uploadOk = 1;

      // var_dump($_FILES['uploadfiles[0]']["name"]);
      // //var_dump($files);
      // die();
      //foreach ($files as $file) {
      //}
      // $upload = diverse_array($_FILES["uploadfiles[]"]);
      // var_dump($upload);
      // die();
      $len = count($_FILES['uploadfiles']['name']);
       var_dump($len);
      // die();

for($i = 0; $i < $len; $i++)
 {
/*
    $target_file = $target_dir . basename($_FILES['uploadfiles']['name'][$i]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

   if(!file_exists($_FILES['uploadfiles']['tmp_name'][$i]) || !is_uploaded_file($_FILES['uploadfiles']['tmp_name'][$i]))
  {
    $uploadOk = 0;
    echo 'No Profile picture uploaded';
    }
  else
  {
      $check = getimagesize($_FILES["uploadfiles"]["tmp_name"][$i]);
      if($check !== false) 
    {
        
        $uploadOk = 1;
      } 
    else 
    {
        echo "File is not an image.";
        $uploadOk = 0;
      }
  



if ($_FILES["uploadfiles"]["size"][$i] > 500000)
  {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
   }

if(!($imageFileType == "jpg" ||$imageFileType == "JPG" || $imageFileType == "png" || $imageFileType == "jpeg"|| $imageFileType == "gif" )) 
{
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0)
  {
      $imageErr .= "Please Upload your Profile picture";
    } 
  else 
 {
    if (!(move_uploaded_file($_FILES["uploadfiles"]["tmp_name"][$i], $target_file)))
    {
        var_dump( $_FILES["uploadfiles"]["tmp_name"][$i]);
        var_dump($target_file);  
        echo "Sorry, there was an error uploading your file.";
    }
   }
  }
   
}


     
      
     

   
   */ 
//$len = count($_FILES['uploadfiles']['name']);


$uploaddir = '/home/anugrahaa/uploads/';
$ext = explode('/',$_FILES["uploadfiles"]["type"])[1];
$target_file_name = "1.".$ext;
$target_file = $uploaddir.$target_file_name;
move_uploaded_file($_FILES["uploadfiles"]["tmp_name"],$target_file);
echo "TARGET DIR: ".$target_file." FORM DATA SAVED IN DATABASE! TO SUBMIT ANOTHER FORM, CLICK HERE";


//for($i = 0; $i < $len; $i++) {
  // echo $_FILES['uploadfiles']['tmp_name'][$i] . " ";
   // change size to whatever key you need - error, tmp_name etc
  //$uploadfile = $uploaddir . basename($_FILES['uploadfiles']['name'][$i]);
  //var_dump($uploadfile);
  //if (move_uploaded_file($_FILES['uploadfiles']['tmp_name'][$i], $uploadfile)) {
   // echo "File is valid, and was successfully uploaded.\n";
//} else {
   // echo "Possible file upload attack!\n";
//}

//echo 'Here is some more debugging info:';
//print_r($_FILES);
//}

}
public function appt()
{
  header('location: view/patient/appt_patient.php');
}
public function logout()
{
header('location: view/patient/logout.php');  

  }
}


 
?>