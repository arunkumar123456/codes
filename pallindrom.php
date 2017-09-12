<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$num=555;
$p=$num;
$revnum=0;
while ($num!=0) {

	$revnum=$revnum*10+$num%10;
	$num=(int)($num/10);

}
if ($revnum==$p) {

	echo "$p is a pallindrom";

}
else{
	echo "$p is not a pallindrom";
}

 ?>


</body>
</html>