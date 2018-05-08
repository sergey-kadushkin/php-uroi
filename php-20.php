<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>20</title>
</head>
<body>
	<h1>Задачи на отработку циклов и функций PHP
</h1>

	<h3>Задание 1</h3>
		<?php
			for ($i = 1; $i <= 100; $i++) {
				echo $i.' ';
			}
		?>

	<h3>Задание 2</h3>
		<?php
			for ($i = 2; $i <= 100; $i+=2) {
				echo $i.' ';
			}
		?>

	<h3>Задание 3</h3>
		<?php
			$sum = 0;
			for ($i = 1; $i <= 100; $i++) {
				$sum+=$i;
			}
			echo $sum;
		?>
	
	<h3>Задание 4</h3>
		<?php
			$sum = 0;
			for ($i = 1; $i <= 15; $i++) {
				$sum+=$i*$i;
			}
			echo $sum;
		?>			

	<h3>Задание 5</h3>
		<?php
			$sum = 0;
			for ($i = 1; $i <= 15; $i++) {
				$sum+=sqrt($i);
			}
			echo round($sum, 2);
		?>	

	<h3>Задание 6</h3>
		<?php
			$sum = 0;
			for ($i = 1; $i <= 100; $i++) {
				if($i%7==0){
					$sum+=$i;
				}
			}
			echo $sum;
		?>	

	<h3>Задание 7</h3>
		<?php
			$arr = [];
			for ($i = 1; $i <= 10; $i++) {
				$arr[] = 'x';
			}
			var_dump($arr);
		?>
	<h3>Задание 9</h3>
		<?php
			$arr = [];
			for ($i = 10; $i > 0; $i--) {
				$arr[] = $i;
			}
			var_dump($arr);
		?>
	<h3>Задание 10</h3>
		<?php
			$arr = [];
			for ($i = 1; $i <= 10; $i++) {
				$arr[] = mt_rand(1, 10);
			}
			var_dump($arr);
		?>
	<h3>Задание 11</h3>
		<?php
			$arr = '';
			for ($i = 1; $i <= 10; $i++) {
				$arr .= mt_rand(1, 10);
			}
			echo($arr);
		?>
	<h3>Задание 13</h3>
		<?php
			$arr = [1, 2, 3, 4, 6, 9, 11];
			$sum = 0;
			foreach ($arr as $elem) {
				$sum += $elem * $elem;
			}
			echo $sum;
		?>
	<h3>Задание 14</h3>
		<?php
			$arr = [1, 2, 3, 4, 6, 9, 11];
			$sum = 0;
			foreach ($arr as $elem) {
				$sum += $elem * $elem;
			}
			echo floor(sqrt($sum));
		?>	

	<h3>Задание 17</h3>
		<?php
			$str = '';
			for ($i = 1; $i <= 10; $i++) {
				for ($j = 1; $j <= $i; $j++) {
					$str .= $i;
				}
			}
			echo $str;
		?>
	<h3>Задание 18</h3>
		<?php
			$arr = [
				0=>['name'=>'Коля', 'salary'=>300],
				1=>['name'=>'Вася', 'salary'=>400],
				2=>['name'=>'Петя', 'salary'=>500],
			];

			foreach ($arr as $elem) { 
				echo $elem['name'] .'-'. $elem['salary'] . '<br>';
		 	}
		?>
	<h3>Задание 20</h3>
		<?php
			$str = 'apple';
			$first = substr($str, 0, 1);
			$str = strtoupper($first).substr($str, 1, strlen($str));
			echo $str;
		?>
	<h3>Задание 21</h3>
		<?php
			$str ='apple';
			$arr = str_split($str, 1);
			$arr = array_reverse($arr);
			$str = implode($arr);
			echo $str;
		?>
	<h3>Задание 24</h3>
		<?php
			$arr = explode('_', 'var_test_text');
			$str = '';
			foreach ($arr as $elem) {
				if($elem == $arr[0]) {
					$str .= $elem;
				} else {
					$str .= ucfirst($elem);
				}
			}
			echo $str;
		?>		

</body>
</html>