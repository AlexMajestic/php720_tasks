<?php 
	$len = $_POST['mas_len'];
	if(isset($len)){
		if(ctype_digit($len) && $len > 1){
			$mas = [];
			echo "Исходный массив: ";
			for($i=0;$i<$len;$i++){
				$mas[$i]=rand(1,100);
				echo $mas[$i]." ";
				if($i==0){
					$min = $mas[$i];
					$min_i = $i;
					$max = $mas[$i];
					$max_i = $i;
				}else{
					if($mas[$i]>$max){
						$max = $mas[$i];
						$max_i = $i;
					}
					if($mas[$i]<$min){
						$min = $mas[$i];
						$min_i = $i;
					}
				}
			}
			$tmp = $mas[$max_i];
			$mas[$max_i]=$mas[$min_i];
			$mas[$min_i]=$tmp;
			echo "<br>";
			echo "Минимальное значение = " . $min . "<br>";
			echo "Максимальное значение = " . $max . "<br>";
			echo "Итоговый массив: ";
			for($i=0;$i<$len;$i++){
				echo $mas[$i] . " ";
			}

		}else{
			echo "Некорректные входные данные";
		}
	}else{
		echo "Нет данных";
	}
 ?>