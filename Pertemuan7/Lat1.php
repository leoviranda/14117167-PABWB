<?php
function swap(&$a,&$b){
	$temp=$a;
	$a=$b;
	$b=$temp;;
	return 0;
}

$temp=0;
$a=1;
$b=2;
echo "Nilai sebelum diswap </br>";
echo "A = 1 </br>";
echo "B = 2 </br>";
echo "</br>";
swap($a,$b);
echo "Nilai sesudah diswap </br>";
echo "A = $a </br>";
echo "B = $b </br>";
?>
