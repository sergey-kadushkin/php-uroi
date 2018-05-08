<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>5</title>
</head>
<body>
	<h1>Задачи на математические функции PHP</h1>
	<h3>Задание 1</h3>
		<?php
			$a = 10;
			$b = 3;
			echo $a % $b;
		?>

	<h3>Задание 2</h3>
		<?php
			$a = 10;
			$b = 3;
			$c = $a % $b;
			
			if ($c == 0) {
				echo 'Делится, результат деления: ' . ($a / $b);
			} else {
				echo 'Делится с остатком '.$c;
			}
		?>

	<h3>Задание 3</h3>
		<?php
			$st = pow(2, 10);
			echo $st; 
		?>

	<h3>Задание 4</h3>
		<?php
			$sqrt = sqrt(245);
			echo $sqrt;
		?>

	<h3>Задание 5</h3>
		<?php
			$arr = [4, 2, 5, 19, 13, 0, 10];
			$sum = 0;
			
			foreach ($arr as $elem) {
				$sum += $elem * $elem;
			}
			
			$result = sqrt($sum);
			echo $result;
		?>

	<h3>Задание 6</h3>
		<?php
			$sqrt = sqrt(379);
			
			echo round($sqrt); //округление до целых
			echo round($sqrt, 1); //округление до десятых
			echo round($sqrt, 2); //округление до сотых
		?>

	<h3>Задание 7</h3>
		<?php
			$sqrt = sqrt(587);
			$arr = ['floor'=>floor($sqrt), 'ceil'=>ceil($sqrt)];
			var_dump($arr);
		?>

	<h3>Задание 8</h3>
		<?php
			$arr = [4, -2, 5, 19, -130, 0, 10];
			echo max($arr); //максимальное значение
			echo min($arr); //минимальное значение
		?>


	<h3>Задание 9</h3>
		<?php
			echo mt_rand(1, 100);
		?>

	<h3>Задание 10</h3>
		<?php
			$arr = [];
			for ($i = 1; $i <= 10; $i++) {
				$arr[] = mt_rand(1, 100);
			}
			var_dump($arr);
		?>

	<h3>Задание 11</h3>
		<?php
			$a = 20;
			$b = 24;
			echo abs($a -$b);
		?>

	<h3>Задание 12</h3>
		<?php
			$result = [];
			$arr = [1, 2, -1, -2, 3, -3];
			
			foreach ($arr as $elem) {
				$result[] = abs($elem);
			}
			
			var_dump($result);
		?>

	<h3>Задание 13</h3>
		<?php
			$arr = [];
			$num = 30;
			
			for ($i = 1; $i <= $num; $i++) {
				if ($num % $i == 0) {
					$arr[] = $i;
				}
			}
			var_dump($arr);
		?>

	<h3>Задание 14</h3>
		<?php
			$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
			$sum = 0;
			$i = 0;
			
			foreach ($arr as $elem) {
				$i++; //считает количество элементов
				$sum += $elem;
				
				if ($sum > 10) {
					break; //выйдем из цикла - цель достигнута
				}
			}
			
			echo $i;
		?>

	<h3>Задание 15</h3>
		<?php
			$a = 20;
			$b = 1.5;
			echo floor($a / $b); //обязательно floor
		?>

</body>
</html>