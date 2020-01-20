<!DOCTYPE html>
<html>
<head>
	<title>PHP Calculator</title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="n" required><br>
	<input type="text" name="n2" required><br>
	<input type="submit" name="a" value="+">
	<input type="submit" name="s" value="-"><br>
	<input type="submit" name="m" value="*">
	<input type="submit" name="d" value="/">
</form>
</body>
</html>
<?php 
if (isset($_POST['a'])) {
$n=$_POST['n'];
$n2=$_POST['n2'];
$add=$n+$n2;
echo "Addition is: ".$add;
}
if (isset($_POST['s'])) {
$n=$_POST['n'];
$n2=$_POST['n2'];
$sub=$n-$n2;
echo "Subtraction is: ".$sub;
}
if (isset($_POST['m'])) {
$n=$_POST['n'];
$n2=$_POST['n2'];
$mul=$n*$n2;
echo "Multiplication is: ".$mul;
}

if (isset($_POST['d'])) {
$n=$_POST['n'];
$n2=$_POST['n2'];
$div=$n/$n2;
echo "Division is: ".$div;
}

 ?>