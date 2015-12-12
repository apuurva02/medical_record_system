<?php session_start(); ?>
<html>
<p> hello <?php echo $_SESSION['username'] ; ?></p>
<a href='http://localhost/GH/?controller=patient&action=register'>Add patient</a>
<a href='http://localhost/GH/?controller=doctor&action=register'>Add doctor</a>


</html>