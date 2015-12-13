<?php
session_start();
require_once('F:\wamp\www\GH\imports.php');?>
<!DOCTYPE html>
<html>
<head>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type='text/javascript'>

</script>
</head>
	<!--	<div id='Uploadcontainer'>-->
	<!--
    <input type='file' name='uploadfiles' class='uploadfile' />
    -->
	<!--
    </form>
    FileName: <input type='text' name='filename'/>
    Type Of File: <select name='typeofdoc'>
    <option value='prescription'>Previous Prescriptions</option>
    <option value='scan'>Previous Scans</option>
    </select>
    -->
	<!--
<input type="submit">
-->

	<!--<button id='extraUpload' onclick="return addAnother('Uploadcontainer')">Add another field</button>-->
</head>
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
<div class="row">
	<div class="col s2">
		&nbsp;
	</div>
	<div class="col s8">
		<div class="card">
			<div class="container">
				<div class="row">
					<h3 class="col s12 center-align italic teal-text" style="text-transform: uppercase">
						Upload Files
					</h3>
				</div>

				<div class="row">
					<form class="col s12" action="http://localhost/GH/?controller=patient&action=file_save" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="file-field input-field col s12" >
								<!-- <input id="uploadfiles" name='uploadfiles'type="file" class="btn" required> -->
<div class="btn">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
							
							</input>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input id="filename" name="filename" type="text" class="validate" required>
								<label for="filename">Input File Name</label>
							</div>
							<div class="select-field col s6">
								<select id="typeofdoc" name="typeofdoc" class="validate" required>
								<label for="typeofdoc">Type Of Document</label><option value='prescription'>Previous Prescriptions</option>
									<option value='scan'>Previous Scans</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col s4">&nbsp;</div>
							<div class="col s4">
								<button type="submit" class="btn btn-primary">SAVE</button>
							</div>
						</div>

</div>
					</form>
</div>
			</div>
		</div>
	</div>
</div>
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