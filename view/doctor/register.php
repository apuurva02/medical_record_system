<?php
require_once('/var/www/html/GH/imports.php');
?>
<body class="teal lighten-1">
<div class="row">
    <div class="col s2">
        &nbsp;
    </div>
    <div class="col s8">
        <div class="card">
            <div class="container text-teal">
                <div class="row">
                    <h3 class="col s12 center-align teal-text">
                        Doctor Registration
                    </h3>
                </div>
                <div class="row">
                    <form class="col s12" action="http://localhost/GH/?controller=doctor&action=insert" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" name="name" type="text" class="validate" required>
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="aadhaar" name="aadhaar" type="number" class="validate" required>
                                <label for="age">Aadhaar No.</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="age" name="age" type="number" class="validate" required>
                                <label for="age">Age</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="username" name="username" type="text" class="validate" required>
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" name="email" type="email" class="validate" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="phone" name="phone" placeholder="Enter a 10-digit valid mobile number" type="number" class="validate" required>
                                <label for="phone">Phone</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="hospital" type="text" class="validate" required>
                                <label for="hospital">Hospital</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s4">&nbsp;</div>
                            <div class="col s4">
                                <button type="submit" class="btn btn-primary">SAVE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
