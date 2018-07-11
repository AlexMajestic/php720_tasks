<?php 
	$num = $_POST['number'];
	if(isset($num)){
		if(ctype_digit($num) && $num > 0 && $num <= 10){
			echo "N = ". $num . "<br>";
			echo "Полученный ряд: ";
			$sum = 0;
			for($i=1;$i<=$num;$i++){
				$current_num = 1;
				for($j=1;$j<=$i;$j++){
					$current_num*=$i;
				}
				$sum+=$current_num;
				echo $current_num . " ";
			}
			echo "<br>". "Сумма чисел = " . $sum;
		}else{
			echo "Некорректные входные данные";
		}
	}else{
		echo "Нет данных";
	}
 ?>