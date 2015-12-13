<?php
require_once('F:\wamp\www\GH\imports.php');
?>
<body class="light-green lighten-2 valign-wrapper">
<div class="container valign">
	<div class="card" style="padding:1rem;">
		<div class="container">
		<div class="card-title center-align">
<?php
session_start();

if(session_destroy()) 
{
echo"successfully logged out admin";

}
?>
</div>
<div class="row center-align"  style="padding:1rem;">
<button class="btn center-align"><a class="white-text" href="/GH">Home</a></button>
</div>
</div>
</div>
</div>
</body>