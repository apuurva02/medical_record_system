<?php
require_once('F:\wamp\www\GH\imports.php');?>
<html>
<body class="teal lighten-3">
<div class="container">
 <div class = "section">
     <div class="card-panel">
     	<div class="container">
            <div class="card-title">
<h>Schedule an appointment</h>
</div>
<form action="http://localhost/GH/?controller=patient&action=insert_appt" method="post">
	<div class="row">
                <div class="input-field col s12">
                    <input id="dateappt" name="dateappt" type="date" required>
                    <!-- <label for="dateappt">Preferred date</label> -->
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="timeappt" name="timeappt" type="time" value="16:30" required>
                    <!-- <label for="timeappt">Preferred time</label> -->
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="reason" name="reason" type="text" required>
                    <label for="reason">Reason</label>
                </div>
            </div>
             <div class="row">
                <div class="col s12">
                    <button id="a_login" class="btn-large waves-effect waves-light " type="submit">SUBMIT</button>
                </div>
            </div>
</form>

</html>