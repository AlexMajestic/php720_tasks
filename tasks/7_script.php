<?php 
	$grad = $_POST['grad_time'];
	if(isset($grad)){
		if(ctype_digit($grad) && $grad >= 0 && $grad <= 360){
			echo "Градусы: ". $grad . "<br>";
			$time = $grad / 30;
			$min = $grad % 30 * 2;
			echo "Целых часов: ". intval($time) . "<br>";
			echo "Точное время (с точностью 2 минуты): ". intval($time) . "ч ". $min . "мин";
		}else{
			echo "Некорректные входные данные";
		}
	}else{
		echo "Нет данных";
	}
 ?>