<?php 
	$year = $_POST['year'];
	if(isset($year)){
		if(ctype_digit($year) && $year >= 1 && $year <= 9999){
			echo "Год: ". $year . "<br>";
			if($year % 400 == 0 || $year % 4 == 0 && $year % 100 != 0){
				$year_status = "Високосный";
			}else{
				$year_status = "Не високосный";
			}
			echo "Статус: ". $year_status;
		}else{
			echo "Некорректные входные данные";
		}
	}else{
		echo "Нет данных";
	}
 ?>