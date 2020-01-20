<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- JQuery and Bootstrap for Navigagtion -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<form action="calculato.php" method="post">
	<table class="table table-bordered">
<tr>
	<th>First Number</th>
	<td><input type="text" name="n1" required></td>
</tr>
<tr>
	<th>Second Number</th>
	<td><input type="text" name="n2" required></td>
</tr>
<tr>
	<td colspan="2">
		+ <input type="radio" name="type" value="add">
		- <input type="radio" name="type" value="sub">
		* <input type="radio" name="type" value="mul">
		/ <input type="radio" name="type" value="div">
	</td>
</tr>
<tr>
	<td colspan="2"><input type="submit" name="submit" class="btn btn-block btn-primary"></td>
</tr>
	</table>
</form>

