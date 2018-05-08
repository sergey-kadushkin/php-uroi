<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>4</title>
</head>
<body>
	<h1>Задачи на циклы foreach, while, for в PHP</h1>
	<h3>Задание 1</h3>
		<?php
			$arr = ['html', 'css', 'php', 'js', 'jq'];
			foreach ($arr as $elem) {
				echo $elem.'<br>';
			}
		?>

	<h3>Задание 2</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			$result = 0;
			foreach ($arr as $elem) {
				$result += $elem;
			}
			echo $result;
		?>

	<h3>Задание 3</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			$result = 0;
			foreach ($arr as $elem) {
				$result += $elem * $elem;
			}
			echo $result;
		?>

	<h3>Задание 4</h3>
		<?php
			$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
			foreach ($arr as $key=>$elem) {
				echo $key.' - '.$elem.'<br>';
			}
		?>

	<h3>Задание 5</h3>
		<?php
			$arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];
			foreach ($arr as $key=>$elem) {
				echo $key.' - зарплата '.$elem.' долларов<br>';
			}
		?>

	<h3>Задание 6</h3>
		<?php
			$i = 1;
			while ($i <= 100) {
				echo $i.' ';
				$i++;
			}
		?>

	<h3>Задание 10</h3>
		<?php
			$arr = [2, 5, 9, 15, 0, 4];
			foreach ($arr as $elem) {
				if ($elem > 3 and $elem < 10) {
					echo $elem.'<br>';
				}
			}
		?>

	<h3>Задание 11</h3>
		<?php
			$sum = 0;
			$arr = [2, -5, -9, 15, 11, -4];
			foreach ($arr as $elem) {
				if ($elem > 0) {
					$sum += $elem;
				}
			}
		?>

	<h3>Задание 12</h3>
		<?php
			$arr = [1, 2, 5, 9, 4, 13, 4, 10];
			foreach ($arr as $elem) {
				if ($elem == 4) {
					echo 'Есть!';
					break; //выйдем из цикла
				}
			}
		?>

	<h3>Задание 13</h3>
		<?php
			$arr = ['10', '20', '30', '50', '235', '3000'];
			foreach ($arr as $elem) {
				if ($elem[0] == '1' or $elem[0] == '2' or $elem[0] == '5') {
					echo $elem.'<br>';
				}
			}
		?>

	<h3>Задание 14</h3>
		<?php
			$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
			$str = '';
			foreach ($arr as $elem) {
				$str .= '-'.$elem;
			}
			echo $str.'-';
		?>

	<h3>Задание 15</h3>
		<?php
			$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
			foreach ($arr as $key=>$elem) {
				if ($key == 5 or $key == 6) {
					echo '<b>'.$elem.'</b><br>';
				} else {
					echo $elem.'<br>';
				}
			}
		?>

	<h3>Задание 16</h3>
		<?php
			$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
			$day = 2; //пусть сегодня второй день
			
			foreach ($arr as $key=>$elem) {
				if ($key == $day) {
					echo '<i>'.$elem.'</i><br>';
				} else {
					echo $elem.'<br>';
				}
			}
		?>

	<h3>Задание 17</h3>
		<?php
			$arr = [];
			for ($i = 1; $i <= 100; $i++) {
				$arr[] = $i;
			}
			
			var_dump($arr);
		?>

	<h3>Задание 18</h3>
		<?php
			$num = 1000;
			$i = 0;
			while ($num > 50) {
				$num /= 2;
				$i++;
			}

			echo $i.'<br>'; //кол-во итераций
			echo $num; //число, которое получилось
		?>

</body>
</html>