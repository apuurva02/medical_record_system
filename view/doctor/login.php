<?php
require_once('F:\wamp\www\GH\routes.php');
require_once('F:\wamp\www\GH\imports.php');
?>
<html>
<body class="teal lighten-3">
<div class="container">
 <div class = "section">
     <div class="card-panel">
     	<div class="container">
            <div class="row">
                <h3 class="col s12 center-align italic teal-text" style="text-transform: uppercase">
                    Doctor Login
                </h3>
            </div>
         <div class="row">
        <form class="col s12" action="http://localhost/GH/?controller=doctor&action=login" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="username" name="username" type="text" class="validate" required>
                    <label for="username">Enter Username</label>
                </div>
            </div>
<!--Username: <input type="text" name="username"></input>-->
            <div class="row">
                <div class="input-field col s12">
                    <input id="pwd" name="password" type="password" class="validate" required>
                    <label for="pwd">Enter Password</label>
                </div>
            </div>
<!--Password: <input type="password" name="password"></input>-->
            <div class="row">
                <div class="col s12">
                    <button id="a_login" class="btn-large waves-effect waves-light " type="submit">SUBMIT</button>
                </div>
            </div>
<!--
           <input type="submit">-->
</form>
</div>
</div
</div>
</div>
 </div>
</body>