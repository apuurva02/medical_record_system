<?php session_start(); ?>
<html>
<p> hello <?php echo $_SESSION['username'] ; ?></p>
<a href='http://localhost/GH/?controller=admin&action=add_patient'>Add patient</a>


</html>