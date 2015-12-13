<?php session_start();
error_reporting(E_ALL ^ E_NOTICE);
require_once('F:\wamp\www\GH\imports.php'); ?>
<html>
<!--
<p> hello <?php echo $_SESSION['username'] ; ?></p>
<a href='http://localhost/GH/?controller=patient&action=upload'>upload documents</a>
<a href='http://localhost/GH/?controller=patient&action=appt'>schedule an appointment</a>
-->

<body class="light-green lighten-2">
<header>
    <nav class="teal darken-4" role="presentation">
       <div class="container">
            <div class="nav-wrapper"><a class="page-title">Hello<?php echo $_SESSION['username'];?></a>
            </div>
        </div>
        <ul class="right">
            <li><a href="http://localhost/GH/?controller=patient&action=logout" class ="waves-effect waves-light btn"  >Log Out</a></li>
        </ul>
    <!--<nav class="left-nav teal darken-4" role="menuitem">-->
    <ul id="slide-out" class="side-nav fixed teal darken-4" style="width: 200px; ">
        <li ><span class="white-text large material-icons" >perm_identity</span></li>
        <li ><span class="white-text waves-effect waves-teal">Name: <?php echo $_SESSION['username'] ; ?></span></li>
        <li ><span class="white-text waves-effect waves-teal">Age: 12</span></li>
        <li ><span class="white-text waves-effect waves-teal">Doctor: anu</span></li>
        <li ><span class="white-text waves-effect waves-teal">Hospital: anu</span></li>
    </ul>
    </nav>




</header>
<main>
    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="card-panel hoverable">
                        <div class="upload_docs">
                            <h2 class="center teal-text"><i class="large material-icons">library_books</i></h2>
                            <h5 class="center">Upload your Documents</h5>
                            <p class="center-align light">Upload and store scanned copies of your previous prescriptions, medical certificates and scans.</p>
                            <div class="row center">
                                <a href="http://localhost/GH/?controller=patient&action=upload" id="upload_link" class=" waves-effect waves-light btn-small">Click Here</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card-panel hoverable">
                        <div class="fix_appts">
                            <h2 class="center teal-text"><i class="large material-icons">contact_phone</i></h2>
                            <h5 class="center">Schedule an appointment with the doctor</h5>
                            <p class="center-align light">Choose a preferred time and date to set up an appointment with your doctor also specifying the reason for visit </p>
                            <div class="row center">
                                <a href="http://localhost/GH/?controller=patient&action=appt" id="fixappt_link" class=" waves-effect waves-light btn-small">Click Here</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card-panel hoverable">
                        <div class="admin_block">
                            <h2 class="center teal-text"><i class="large material-icons">invert_colors</i></h2>
                            <h5 class="center">Current Medication</h5>
                            <p class="centre-align light">Displays the current medication the patient is on.</p>
                            <div class="row center">
                                <a href="http://localhost/GH/?controller=patient&action=medication" id="a_login" class=" waves-effect waves-light btn-small">Click Here</a><!--INSERT THE HREF FOR CURRENT MEDS-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br><br>

        <div class="section">

        </div>
    </div>
</main>
<footer class="page-footer teal darken-4">
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
        </div>
    </div>
</footer>
</body>
</html>