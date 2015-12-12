<?php session_start(); ?>
<html>
<p> hello <?php echo $_SESSION['username'] ; ?> Doc</p>
<p>Your Patients :</p>
<table>
	<tr>
	<th>Name</th>
	<th>Age</th>
	</tr>
<?php $ptList = $_SESSION['ptList'];
$i=0;
while($ptList[$i]) {
	echo "<tr><td>".$ptList[$i]['name']."</td><td>".$ptList[$i]['age']."</td><td><button><a href='prescription.php?pid=".$ptList[$i]['username']."'>Prescribe</a></button></td></tr>";
	$i++;
}
echo "</table>";
?>

</html>