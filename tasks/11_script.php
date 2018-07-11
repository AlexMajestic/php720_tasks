<?php 
	$year = $_POST['ch_year'];
	if(isset($year)){
		if(ctype_digit($year) && $year >= 1924){
			echo "Год: ". $year . "<br>";
			$res_year = ($year - 1900) % 12;
			switch ($res_year) {
				case 0:
					$year_name = "Крыса";
					break;
				case 1:
					$year_name = "Бык";
					break;
				case 2:
					$year_name = "Тигр";
					break;
				case 3:
					$year_name = "Кролик";
					break;
				case 4:
					$year_name = "Дракон";
					break;
				case 5:
					$year_name = "Змея";
					break;
				case 6:
					$year_name = "Лошадь";
					break;
				case 7:
					$year_name = "Коза";
					break;
				case 8:
					$year_name = "Обезьяна";
					break;
				case 9:
					$year_name = "Петух";
					break;
				case 10:
					$year_name = "Собака";
					break;
				default:
					$year_name = "Свинья";
					break;
			}
			echo "Символ года: ". $year_name;
		}else{
			echo "Некорректные входные данные";
		}
	}else{
		echo "Нет данных";
	}
 ?>