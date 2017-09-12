<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

error_reporting(E_ALL);

$num =23;

for( $j = 2; $j <= $num; $j++ )
{
for( $k = 2; $k < $j; $k++ )
{
if( $j % $k == 0 )
{
break;
}

}
if( $k == $j )
echo "Prime Number  :$j<br>";
//echo "<br>";
}

?>
</body>
</html>


