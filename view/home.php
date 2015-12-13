<body class="light-green lighten-2">
<nav class="teal darken-4" role="presentation">
<div class="nav-wrapper container">
<a id="brand"  class="brand-logo">MRS</a>
</div>
</nav>
<div class="section no-pad-bot" id="banner">
<div class="container">
<br><br>
<h3 class="header left dark-blue-text">Medical Record System</h3>
<div class="row left">
<h5 class="header col s12 light">A modern responsive medical record service which brings together all your medical history onto a single platform<br></h5>
</div>
<br><br>
</div>
</div>
<div class="container">
<div class="section">
<div class="row">
<div class="col s12 m4">
<div class="card-panel hoverable">
<div class="patient_block">
<h2 class="center teal-text"><i class="material-icons">perm_identity</i></h2>
<h5 class="center">Patient</h5>
<p class="center-align light">Provides options to view the previous medical records and displays the current medication prescribed to a user by the assigned doctor.Also useful in pre-fixing appointments according to convenience</p>
<div class="row center">
<a href="?controller=patient&action=display" id="p_login" class=" waves-effect waves-light btn-small">Log In as Patient</a>
</div>
</div>
</div>
</div>
<div class="col s12 m4">
<div class="card-panel hoverable">
<div class="doctor_block">
<h2 class="center teal-text"><i class="material-icons">thumb_up</i></h2>
<h5 class="center">Doctor</h5>
<p class="center-align light">Provides access to the profiles of patients registered under him/her and can issue online prescriptions to the same.Approve appointments requested by patients. </p>
<div class="row center">
<a href="?controller=doctor&action=display" id="d_login" class=" waves-effect waves-light btn-small">Log In as Doctor</a>
</div>
</div>
</div>
</div>
<div class="col s12 m4">
<div class="card-panel hoverable">
<div class="admin_block">
<h2 class="center teal-text"><i class="material-icons">supervisor_account</i></h2>
<h5 class="center">Administrator</h5>
<p class="centre-align light">Has access to all the doctors and patients under a hospital. Authorized to create new patient and doctor accounts. Validates files uploaded by doctor and uploads files into a patient account</p>
<div class="row center">
<a href="?controller=admin&action=display" id="a_login" class=" waves-effect waves-light btn-small">Log In as Hospital Administrator</a>
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
<footer class="page-footer teal darken-4">
<div class="container">
<div class="row">
<div class="col s12">
<h5 class="white-text">Bio</h5>
<p class="grey-text text-lighten-4">This project aims to digitize the medical records by uniquely identifying the citizens of India via their Aadhaar card number. </p>
</div>
</div>
</div>
<div class="footer-copyright">
<div class="container">
</div>
</div>
</footer>
</body>
<?php

?>