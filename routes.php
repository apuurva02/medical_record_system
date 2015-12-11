<?php
  
  
  function call($controller, $action) {
    require_once('controller/' . $controller . '_controller.php');

    switch($controller) {
      case 'patient':
        
        $controller = new PatientController();
      break;
      case 'doctor':
        
        require_once('model/doctor.php');
        $controller = new DoctorController();
      break;
    }

    $controller->{ $action }();
  }

  
  $controllers = array('patient' => ['display','register', 'insert','login','upload','file_save'],
                       'doctor' => ['display']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      {

      call($controller, $action);
      }
    } else {
      call('home', 'error');
    }
  } else {
    call('home', 'error');
  }
?>