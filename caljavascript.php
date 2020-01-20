<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- JQuery and Bootstrap for Navigagtion -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<form action="calculato.php" method="post" onsubmit="return validationform();">
	<table class="table table-bordered">
<tr>
	<th>First Number</th>
	<td><input type="text" name="n1" id="n1"><span id="msg1" style="color:red;"></span></td>
</tr>
<tr>
	<th>Second Number</th>
	<td><input type="text" name="n2" id="n2"><span id="msg2" style="color:red;"></span></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>
		 Add + <input type="radio" name="type" value="add">
		 Sub - <input type="radio" name="type" value="sub">
		 Mul * <input type="radio" name="type" value="mul">
		 Div / <input type="radio" name="type" value="div">
	</td>
</tr>
<tr>
	<td colspan="2"><input type="submit" name="submit" class="btn btn-block btn-primary"></td>
</tr>
	</table>
</form>
<script>
	function validationform(){
 var a=document.getElementById('n1').value;
 var b=document.getElementById('n2').value;
 if (a=='' || b=='') {
 	if (a=='') {
 		document.getElementById('n1').style.border='1px solid red'
 		document.getElementById('msg1').innerHTML='Mangatory Field'
 	};
 	if (b=='') {
 		document.getElementById('n2').style.border='1px solid red'
 		document.getElementById('msg2').innerHTML='Mangatory Field'
 	};
 	return false;
 }
 else {
 	if (isNaN(a) || isNaN(b)) {
 		if (isNaN(a)) {
 		document.getElementById('n1').style.border='1px solid red'
 		document.getElementById('msg1').innerHTML='Number Field'
 		
 	};
 	if (isNaN(b)) {
 		document.getElementById('n2').style.border='1px solid red'
 		document.getElementById('msg2').innerHTML='Number Field'
 	};
 		return false;
 	}
 	else{
 		return true;
 	}
 }

	}
</script>