<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

function printFibanocci($f)
{
	$first=0;
	$second=1;
	echo "fibanocci series";
	echo "$first","$second";
	for ($i=2; $i <$f ; $i++) { 
		$third=$first+$second;
		echo "$third,";
		$first=$second;
		$second=$third;
		# code...
	}


}
printFibanocci(10)


 ?>



</body>
</html>