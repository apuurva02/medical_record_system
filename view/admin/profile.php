<?php session_start();
require_once('F:\wamp\www\GH\imports.php'); ?>
<body class="light-green lighten-2">
<header>
    <nav class="teal darken-4" role="presentation">
        <div class="container">
            <div class="nav-wrapper"><a class="page-title">Hello <?php echo $_SESSION['username'];?></a>
            </div>
        </div>
        <ul class="right">
            <li><a href="http://localhost/GH/?controller=admin&action=logout" class ="waves-effect waves-light btn"  >Log Out</a></li>
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
                            <h2 class="center teal-text"><i class="large material-icons">add</i></h2>
                            <h5 class="center">Add new Doctor</h5>
                            <p class="center-align light">Authorized to add a new doctor into the hospital</p>
                            <div class="row center">
                                <a href="http://localhost/GH/?controller=doctor&action=register" id="add_d" class=" waves-effect waves-light btn-small">Click Here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card-panel hoverable">
                        <div class="fix_appts">
                            <h2 class="center teal-text"><i class="large material-icons">person_pin</i></h2>
                            <h5 class="center">Add new Patient</h5>
                            <p class="center-align light">Authorized to add a new patient, upload their documents and assign a doctor.</p>
                            <div class="row center">
                                <a href="http://localhost/GH/?controller=patient&action=register" id="fadd_p" class=" waves-effect waves-light btn-small">Click Here</a>
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