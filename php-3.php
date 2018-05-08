<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>3</title>
</head>
<body>
	<h1>Работа с конструкциями if-else, switch-case в PHP</h1>
	<h3>Задание 1</h3>
		<?php
			$a = 1;
			if ($a == 0) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 2</h3>
		<?php
			$a = 1;
			if ($a > 0) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 3</h3>
		<?php
			$a = 1;
			if ($a < 0) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			} 
		?>

	<h3>Задание 4</h3>
		<?php
			$a = 1;
			if ($a >= 0) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 5</h3>
		<?php
			$a = 1;
			if ($a >= 0) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 6</h3>
		<?php
			$a = 1;
			if ($a != 0) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 7</h3>
		<?php
			$a = 'test';
			if ($a == 'test') {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 8</h3>
		<?php
			$a = '1';
			if ($a === 1) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 9</h3>
		<?php
			$a = '';
			if (empty($a)) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 10</h3>
		<?php
			$a = '';
			if (!empty($a)) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 11</h3>
		<?php
			$a = 3;
			if (isset($a)) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 12</h3>
		<?php
			$a = 1;
			if (!isset($a)) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 13</h3>
		<?php
			$var = true;
			if ($var == true) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 14</h3>
		<?php
			$var = true;
			if (!$var) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 15</h3>
		<?php
			$a = 5;
			if ($a > 0 and $a < 5) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 16</h3>
		<?php
			$a = 5;
			if ($a == 0 or $a == 2) {
				$a += 7;
			} else {
				$a /= 10;
			}
			echo $a;
		?>

	<h3>Задание 17</h3>
		<?php
			$a = 1;
			$b = 3;
			
			if ($a <= 1 and $b >= 3) {
				echo $a + $b;
			} else {
				echo $a - $b;
			}
		?>

	<h3>Задание 18</h3>
		<?php
			$a = 1;
			$b = 4;
			
			if (($a > 2 and $a < 11) or ($b >= 6 and $b < 14)) {
				echo 'Верно';
			} else {
				echo 'Неверно';
			}
		?>

	<h3>Задание 19</h3>
		<?php
			$num = 2;
	
			switch ($num) {
				case 1:
					$result = 'зима';
				break;
				case 2:
					$result = 'весна';
				break;
				case 3:
					$result = 'лето';
				break;
				case 4:
					$result = 'осень';
				break;
			}

			echo $result;
		?>

	<h3>Задание 20</h3>
		<?php
			$day = 12;
	
			if ($day <= 10) {
				$decade = 1;
			}
			if ($day >= 11 and $day <= 20) {
				$decade = 2;
			}
			if ($day >= 21 and $day <= 31) {
				$decade = 3;
			}
			echo $decade;
		?>

	<h3>Задание 21</h3>
		<?php
			$month = 6;
	
			if ($month == 12 or $month == 1 or $month == 2) {
				$result = 'Зима';
			}
			if ($month >= 3 and $month <= 5) {
				$result = 'Весна';
			}
			if ($month >= 6 and $month <= 8) {
				$result = 'Лето';
			}
			if ($month >= 9 and $month <= 11) {
				$result = 'Осень';
			}

			echo $result;
		?>

	<h3>Задание 22</h3>
		<?php
			$year = 2000;
			if ($year % 4 == 0 or ($year % 400 == 0 and $year % 100 != 0)) {
				echo 'Високосный';
			} else {
				echo 'Не високосный';
			}
		?>

	<h3>Задание 23</h3>
		<?php
			$str = 'abcde';
			if ($str[0] == 'a') {
				echo 'Да';
			} else {
				echo 'Нет';
			}
		?>

	<h3>Задание 24</h3>
		<?php
			$str = '12345';
			if ($str[0] == '1' or $str[0] == '2' or $str[0] == '3') {
				echo 'Да';
			} else {
				echo 'Нет';
			}
		?>

	<h3>Задание 25</h3>
		<?php
			$str = '123';
			$result = $str[0] + $str[1] + $str[2];
			echo $result;
		?>

	<h3>Задание 26</h3>
		<?php
			$str = '123231';
			
			$sum1 = $str[0] + $str[1] + $str[2];
			$sum2 = $str[3] + $str[4] + $str[5];
			
			if ($sum1 == $sum2) {
				echo 'Да';
			} else {
				echo 'Нет';
			}
		?>

</body>
</html>