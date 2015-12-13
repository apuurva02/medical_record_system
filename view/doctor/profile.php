<?php
session_start();
require_once('F:\wamp\www\GH\imports.php');?>
<!--<div class='container'>
    <div class="card">
        <p class="flow-text row">
        <div class="col s6">
            <h3>Hello <?php echo $_SESSION['username'] ; ?></h3>
        </div>
        </p>
    </div>
    <div class="col s6"><a href='http://localhost/GH/?controller=doctor&action=logout'>LOG OUT</a></div>
    <div class="row">
        <a href='http://localhost/GH/?controller=doctor&action=patient_list'><h6 class="teal-text">List of Patients</h6></a>
    </div>
    <div class="row">
        <a href='http://localhost/GH/?controller=doctor&action=appt_approve'><h6 class="teal-text">List Appointment Requests</h6></a>
    </div>
</div>-->
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
<main>
    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="card-panel hoverable">
                        <div class="upload_docs">
                            <h2 class="center teal-text"><i class="large material-icons">view_list</i></h2>
                            <h5 class="center">List of Patients</h5>
                            <p class="center-align light">Gives a list of all the patients registered in the hospital with you as their family doctor</p>
                            <div class="row center">
                                <a href="http://localhost/GH/?controller=doctor&action=patient_list" id="p-list" class=" waves-effect waves-light btn-small">Click Here</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card-panel hoverable">
                        <div class="fix_appts">
                            <h2 class="center teal-text"><i class="large material-icons">work</i></h2>
                            <h5 class="center">Accept appointments</h5>
                            <p class="center-align light">Lists out the various appointment requests made by the patients and provides an option to access these requests according to the schedule.</p>
                            <div class="row center">
                                <a href="http://localhost/GH/?controller=doctor&action=appt_approve" id="fixappt_link" class=" waves-effect waves-light btn-small">Click Here</a>
                            </div>
                        </div>
                    </div>
                </div>

                                    </div>
                </div>
            </div>
        <br><br>

        <div class="section">

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