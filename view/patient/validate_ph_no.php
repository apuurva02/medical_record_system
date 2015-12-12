<script>
function patient_val(){
	no(document.getElementById("phone").id);
	no(document.getElementById("contact").id);
	a_no(document.getElementById("aadhaar").id);
	a_no(document.getElementById("doctor").id);
}
function no(input_no_id){
	 var x=document.getElementById(input_no_id);
	var ph_no = /^\d{10}$/;
	if(x.value.match(ph_no)){
		return "+91"+ x.value;
	}
	else{
		document.getElementById("input_no_id").style.border = '1px solid red';
		return false
	}
}
function a_no(adhr_no){
	var x=document.getElementById(adhr_no);
	var val_no = /^\d{12}$/;
	if(x.value.match(adhr_no)){
		return true;
	}
	else{
		document.getElementById("adhr_no").style.border = '1px solid red';
		return false
	}
}
</script>