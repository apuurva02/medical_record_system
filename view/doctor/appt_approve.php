<?php session_start(); 
require_once('F:\wamp\www\GH\imports.php');
?>
<body>
	<header>
    <nav class="teal darken-4" role="presentation">
        <div class="container">
            <div class="nav-wrapper"><a class="page-title">Hello <?php echo $_SESSION['username'];?></a>
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
<div class="card">
<p class='card-title center-align'>Your Requested Appointments</p>
<table class="bordered striped centered">
	<thead>
    <tr>
    <th>Patient</th>
    <th>Reason</th>
    <th>Date</th>
    <th>Time</th>
    </tr>
    </thead>
    <tbody>
<?php $appts = $_SESSION['appts'];
$i=0;
while($appts[$i]) {
    $x=$appts[$i]['pid'];
    echo "<tr><td>".$appts[$i]['pid']."</td><td>".$appts[$i]['reason']."</td><td>".$appts[$i]['dateappt']."</td><td>".$appts[$i]['reason']."</td><td><button class='btn white-text'><a class='white-text' href='http://localhost/GH/?controller=doctor&action=appt_approve&pid=".$appts[$i]['pname']."&app=1'>Approve</a></button></td><td><button class='btn white-text'><a class='white-text' href='http://localhost/GH/?controller=doctor&action=appt_approve&pid=".$appts[$i]['pname']."&app=2'>Disapprove</a></button></td></tr>";
    $i++;
}
echo "</tbody></table>";
?>
</div>
</div>
</body>