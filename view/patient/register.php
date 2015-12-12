<?php require_once('../../../imports.php');
?>
<div class="container">
<div class="row">
<span class="col s12 center-align">
REGISTER
</span>
</div>
<div class="row">
    <form class="col s12" action="http://localhost/GH/?controller=patient&action=insert" method="post">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Name" id="name" name="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
</div>
<div class="row">
<div class="input-field col s6">
<input id="aadhaar" name="aadhaar" type="number" class="validate">
          <label for="age">Aadhaar No.</label>
        </div>
        <div class="input-field col s6">
          <input id="age" name="age" type="number" class="validate">
          <label for="age">Age</label>
        </div>
      </div>
<div class="row">
<div class="input-field col s12">
 <input id="username" name="username" type="text" class="validate">
          <label for="username">Username</label>
</div>
</div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="phone" type="number" class="validate">
          <label for="phone">Phone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="contact" type="number" class="validate">
          <label for="contact">Emergency Contact</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="doctor" type="number" class="validate">
          <label for="doctor">Doctor's Aadhaar No.</label>
        </div>
      </div>	
      <div class="row">
        <div class="input-field col s12">
          <input id="hospital" type="hospital" class="validate">
          <label for="hospital">Hospital</label>
        </div>
      </div> 
    </form>
  </div>
<div class="row">
<div class="col s4">&nbsp;</div>
<div class="col s4"><button type="submit" class="btn btn-primary">SAVE</button>
</div>
</div>
<form>
<table> 
</form>
</div>
