<?php 
	$start = $_POST['start_number'];
	$finish = $_POST['finish_number'];
	if(isset($finish) && isset($start)){
		if(ctype_digit($finish) && ctype_digit($start)){
			if($finish < $start){
				$tmp = $finish;
				$finish = $start;
				$start = $tmp;
			}
			$sum = 0;
			$sum_line = NULL;
			for($i=$start;$i<=$finish;$i++){
				if(fmod($i,5)==0){
					$sum+=$i;
					$sum_line .= " ".$i;
				}
			}
			if($sum_line != NULL){
				echo "Проверяем числа от " . $start . " до " . $finish . "<br>";
				echo "Складываем числа: ".$sum_line . "<br>";
				echo "Сумма чисел = ".$sum;
			}else{
				echo "Нет чисел, удовлетворяющих условию";
			}
		}else{
			echo "Некорректные входные данные";
		}
	}else{
		echo "Нет данных";
	}
 ?>