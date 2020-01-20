<p>This Answer is: </p>
<?php 
//if (isset($_POST['submit'])) {
	$n1=$_POST['n1'];
	$n2=$_POST['n2'];
	$type=$_POST['type'];
	// switch ($type) {
	// 	case 'add':
	// 		echo $n1+$n2;
	// 		break;
		
	// 	case 'sub':
	// 		echo $n1-$n2;
	// 		break;
		
	// 	case 'mul':
	// 		echo $n1*$n2;
	// 		break;
		
	// 	case 'div':
	// 		echo $n1/$n2;
	// 		break;
		
	// 	default:
	// 		echo "Please input one number";
	// 		break;
	// }
//}
	if($type=='add'){
	echo $n1+ $n2;
}
elseif($type=='sub'){
	echo $n1- $n2;
}
elseif($type=='mul'){
	echo $n1*$n2;
}
elseif($type=='div'){
	echo $n1/$n2;
}

 ?>
 <hr>
<a href="caljavascript.php">Back</a>
