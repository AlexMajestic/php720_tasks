<?php 
	$num = $_POST['number'];
	if(isset($num)){
		if(ctype_digit($num)){
			echo "Исходное число = " . $num . "<br>";
			$sum = 0;
			$num_len = strlen($num);
			for($i=0;$i<$num_len;$i++){
				$sum+=$num%10;
				$num=$num/10;
			}
			echo "Сумма цифр = " . $sum;
		}else{
			echo "Некорректные входные данные";
		}
	}else{
		echo "Нет данных";
	}
 ?>