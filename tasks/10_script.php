<?php 
	$card = $_POST['card'];
	if(isset($card)){
		if(ctype_digit($card) && $card >= 2 && $card <= 14){
			echo "Номер: ". $card . "<br>";
			switch ($card) {
				case 2:
					$card_status = "Двойка";
					break;
				case 3:
					$card_status = "Тройка";
					break;
				case 4:
					$card_status = "Четверка";
					break;
				case 5:
					$card_status = "Пятерка";
					break;
				case 6:
					$card_status = "Шестерка";
					break;
				case 7:
					$card_status = "Семерка";
					break;
				case 8:
					$card_status = "Восьмерка";
					break;
				case 9:
					$card_status = "Девятка";
					break;
				case 10:
					$card_status = "Десятка";
					break;
				case 11:
					$card_status = "Валет";
					break;
				case 12:
					$card_status = "Дама";
					break;
				case 13:
					$card_status = "Король";
					break;
				default:
					$card_status = "Туз";
					break;
			}
			echo "Достоинство: ". $card_status;
		}else{
			echo "Некорректные входные данные";
		}
	}else{
		echo "Нет данных";
	}
 ?>