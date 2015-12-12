
<!DOCTYPE html>
<html>
<head>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type='text/javascript'>
//function addAnother(fileId)
//{
//    var file = document.getElementById(fileId);
//    var el      =   document.createElement('input');
//    el.className    =   'uploadfile';
//    el.setAttribute('type','file');
//    el.setAttribute('name','uploadfiles[]');
//    file.appendChild(el);
//    return false;
//}
</script>
</head>
<body>
<form action="http://localhost/GH/?controller=patient&action=file_save" method="post" enctype="multipart/form-data">
<div id='Uploadcontainer'>
<input type='file' name='uploadfiles' class='uploadfile' />
</div>
<!--<button id='extraUpload' onclick="return addAnother('Uploadcontainer')">Add another field</button>-->
<input type="submit">
</form>

</html>