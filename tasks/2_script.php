<?php 
	$num = $_POST['number'];
	$in_num = $_POST['control_number'];
	if(isset($num) && isset($in_num)){
		if(ctype_digit($num) && ctype_digit($in_num) && strlen($in_num)==1){
			echo "Исходное число = " . $num . "<br>";
			echo "Контрольное число = " . $in_num . "<br>";
			$sum = 0;
			$num_len = strlen($num);
			for($i=0;$i<$num_len;$i++){
				if($num%10 == $in_num){
					$sum++;
				}
				$num=$num/10;
			}
			echo "Количество вхождений = " . $sum;
		}else{
			echo "Некорректные входные данные";
		}
	}else{
		echo "Нет данных";
	}
 ?>