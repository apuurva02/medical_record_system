<?php
//session_start();
require_once('connection.php');

if (isset($_GET['controller']) && isset($_GET['action']))
 {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
    
  } 


else 
{
	$controller = "home";
	$action = "display";
    }
//if(!empty($_SESSION))
//{if($_SESSION['username'])
// {
// 	if($_SESSION['user_type'] == "patient")
// 		header('location: view/patient/profile.php');
// 	if($_SESSION['user_type'] == "doctor")
// 		header('location: view/doctor/profile.php');
// 	if($_SESSION['user_type'] == "admin")
// 		header('location: view/admin/profile.php');

// }
// else{ session_destroy();
    include('view\home.php'); 
//}
    //require_once('F:\wamp\www\GH\routes.php'); 

?>
