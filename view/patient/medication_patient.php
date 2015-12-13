<?php session_start(); 
error_reporting(E_ALL ^ E_NOTICE);
require_once('F:\wamp\www\GH\imports.php');?>
<body class="light-green lighten-2">
	<nav class="teal darken-4" role="presentation">
        <div class="container">
            <div class="nav-wrapper"><a class="page-title">Hello <?php echo $_SESSION['username'];?></a>
            </div>
        </div>
        <ul class="right">
            <li><a href="http://localhost/GH/?controller=admin&action=logout" class ="waves-effect waves-light btn"  >Log Out</a></li>
        </ul>
       </nav>
<div class="container"><div class="card">
	<h5 class="card-title center-align">Your Prescriptions </h5>
<table id="pres" class="bordered striped centered">
	<thead>
	<tr>
	<th>REASON</th>
	<th>PRESCRIPTION</th>
	<th>DIAGNOSIS</th>
	<th>DATE OF APPOINTMENT</th>
	<th>TIME OF APPOINTMENT</th>
	</tr>
	</thead>
	<tbody>
<?php $medi = $_SESSION['medi'];
$i=0;
while($medi[$i]) {
	$pre = unserialize ($medi[$i]['prescription']);
	   
	echo "<tr><td>".$medi[$i]['reason']."</td><td>";
	$j=1;
	while ( $pre[$j]) {
		echo $pre[$j][0]."-dosage:".$pre[$j][1].",";
		$j++;
	}
	echo "</td><td>".$medi[$i]['diagnosis']."</td><td>".$medi[$i]['dateappt']."</td><td>".$medi[$i]['timeappt']."</td></tr>";
	//print_r(unserialize ($medi[$i]['prescription']));
	$i++;
}
echo "</tbody></table>";
?>

</div></div>
</body>