<?php session_start();
require_once('F:\wamp\www\GH\imports.php'); ?>
<body class="light-green lighten-2">
	<header>
    <nav class="teal darken-4" role="presentation">
        <div class="container">
            <div class="nav-wrapper"><a class="page-title">Hello<?php echo $_SESSION['username'];?></a>
            </div>
        </div>
        <ul class="right">
            <li><a href="http://localhost/GH/?controller=doctor&action=logout" class ="waves-effect waves-light btn"  >Log Out</a></li>
        </ul>
        <!--<nav class="left-nav teal darken-4" role="menuitem">-->
<!--        <ul id="slide-out" class="side-nav fixed teal darken-4" style="width: 200px; ">
            <li ><span class="white-text large material-icons" >perm_identity</span></li>
            <li ><span class="white-text waves-effect waves-teal">Name: <?php echo $_SESSION['username'] ; ?></span></li>
            <li ><span class="white-text waves-effect waves-teal">Age: <?php echo $_SESSION['age'] ; ?></span></li>
            <li ><span class="white-text waves-effect waves-teal">Doctor: <?php echo $_SESSION['doc'] ; ?></span></li>
            <li ><span class="white-text waves-effect waves-teal">Hospital <?php echo $_SESSION['hospital'] ; ?></span></li>
        </ul>-->
    </nav>
</header>
<div class="container">
<div class="card center-align">
<!-- <h5> hello <?php echo $_SESSION['username'] ; ?> Doc</h5> -->
<h5>Your Patients :</h5>
<table class="bordered striped centered">
<thead>
	<tr>
	<th>Name</th>
	<th>Age</th>
	</tr>
	</thead>
	<tbody>
<?php $ptList = $_SESSION['ptList'];
$i=0;
while($ptList[$i]) {
	echo "<tr><td>".$ptList[$i]['name']."</td><td>".$ptList[$i]['age']."</td><td><button><a href='prescription.php?pid=".$ptList[$i]['username']."'>Prescribe</a></button></td></tr>";
	$i++;
}
echo "</tbody></table>";
?>
</table>
</div>
</div>
<!-- <footer class="page-footer teal darken-4">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="white-text">MRS</h5>
                <p class="grey-text text-lighten-4">A modern responsive medical record service which brings together all your medical history onto a single platform </p>

            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <!-- Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>-->
        <!--</div>
    </div>
</footer> -->
</body>
</html>