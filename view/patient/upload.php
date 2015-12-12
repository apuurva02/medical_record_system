
<!DOCTYPE html>
<html>
<head>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type='text/javascript'>

</script>
</head>
<body>
<form action="http://localhost/GH/?controller=patient&action=file_save" method="post" enctype="multipart/form-data">
<div id='Uploadcontainer'>
<input type='file' name='uploadfiles' class='uploadfile' />

FileName: <input type='text' name='filename'/>
Type Of File: <select name='typeofdoc'>
<option value='prescription'>Previous Prescriptions</option>
<option value='scan'>Previous Scans</option>
</select>

</div>
<!--<button id='extraUpload' onclick="return addAnother('Uploadcontainer')">Add another field</button>-->
<input type="submit">
</form>

</html>