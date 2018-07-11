<?php 
	$len = $_POST['mas_len'];
	if(isset($len)){
		if(ctype_digit($len) && $len > 1){
			$mas = [];
			$mult = 1;
			echo "Исходный массив: ";
			for($i=1;$i<=$len;$i++){
				$mas[$i]=rand(1,100);
				echo $mas[$i]." ";
				if($i%2==0){
					$mult*=$mas[$i];
				}
			}
			echo "<br>";
			echo "Произведение = " . $mult . "<br>";
			echo "Итоговый массив: ";
			for($i=1;$i<=$len;$i++){
				if($i%2==1){
					echo $mas[$i] . " ";
				}
			}

		}else{
			echo "Некорректные входные данные";
		}
	}else{
		echo "Нет данных";
	}
 ?>