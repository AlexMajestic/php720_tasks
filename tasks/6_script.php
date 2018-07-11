<?php 
	$fio_string = $_POST['full_name'];
	if(isset($fio_string)){
		echo "<b>Полное ФИО:</b> " . $fio_string . "<br>";
		$fio = explode(" ", $fio_string);
		echo "<b>Сокращенное ФИО:</b> " . $fio[0] . " " . mb_substr($fio[1], 0,1) . ". " . mb_substr($fio[2], 0,1) . ". ";
	}else{
		echo "Нет данных";
	}
 ?>