<?php 

echo demo(1,12);
function demo($first,$n)
{
	$sum = 0;
	for ($i=$first; $i <=$n ; $i++) { 
		$temp = substr_count($i,1);
		$sum +=$temp;
	}
	return $sum;
}



 ?>