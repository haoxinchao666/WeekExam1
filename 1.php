<?php 
$arr = [3,32,321];

echo demo($arr);
function demo($arr)
{
	$sum = count($arr);
	for ($i=0; $i <$sum ; $i++) { 
		for ($j=$i+1; $j <$sum ; $j++) { 
			if($arr[$i]*$arr[$j] == $arr[$j]*$arr[$i]){
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
                // var_dump($arr);
			}
		}
	}
	return implode('',$arr);

}



 ?>