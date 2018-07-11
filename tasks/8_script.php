<?php 
	$time = $_POST['time_min'];
	if(isset($time)){
		if(ctype_digit($time) && $time > 0){
			echo "Прошло минут: ". $time . "<br>";
			$time %= 60;
			$time %= 5;
			$color = ($time <= 2 ? "Зеленый" : "Красный");
			$color_style = ($color=="Зеленый" ? "green" : "red");
			echo "Горит ". "<b style='color:" . $color_style . "'> " . $color;
		}else{
			echo "Некорректные входные данные";
		}
	}else{
		echo "Нет данных";
	}
 ?>