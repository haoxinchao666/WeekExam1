<?php 
header("content-type:text/html;charset=utf-8");

echo check_ugly(10);
function check_ugly($num)
{
	for ($i=0; $i <$num ; $i++) { 
		if($num % 2 != 0){
          break;
		}else{
			$num /= 2;
		}
	}

	for ($i=0; $i <$num ; $i++) { 
		if($num % 3 != 0){
          break;
		}else{
			$num /= 3;
		}
	}

	for ($i=0; $i <$num ; $i++) { 
		if($num % 5 != 0){
          break;
		}else{
			$num /= 5;
		}
	}

	if($num == 1){
        return "是丑数";
	}else{
		return "不是丑数";
	}
}





 ?>