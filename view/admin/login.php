
<html>
<h>Admin Login</h>
<form action="http://localhost/GH/?controller=admin&action=login" method="post">
Username: <input type="text" name="username"></input>
Password: <input type="password" name="password"></input>
<input type="submit">
</form>
<?php
require_once('routes.php');
?>
</html>