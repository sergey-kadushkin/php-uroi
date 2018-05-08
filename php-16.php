<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>16</title>
</head>
<body>
	<h1>Правильное использование пользовательских функций</h1>


	<h3>Задание 1</h3>
		<?php
			function isNumberInRange($num)
			{
				return $num > 0 and $num < 10;
			}

			if (isNumberInRange(4)===true) {
				echo 'true';
			} else {
				echo 'false';
			}
		?>

	<h3>Задание 2</h3>
		<?php 
			$arr=[1,-4,45,0,23,1,6,-3,34,2,7];
			$arr1 = [];
			for ($i=0; $i < count($arr); $i++) { 
				if (isNumberInRange($arr[$i])===true) {
					$arr1[]=$arr[$i];
				}
			}
			var_dump($arr1)
		?>


	<h3>Задание 3</h3>
		<?php 
			function getDigitsSum($num) {
				return array_sum((str_split($num, 1)));
			}
			
			echo getDigitsSum(123); //выведет 6
		?>

	<h3>Задание 4</h3>
		<?php 
			for ($i=1; $i <= 2018; $i++) { 
				if (getDigitsSum($i)==13) {
					echo $i.'<br>';
				}
			}			
		?>

	<h3>Задание 5</h3>
		<?php 
			function isEven($num) {
				return $num % 2 == 0;
			}
			if (isEven(16)===true) {
				echo 'true';
			} else {
				echo 'false';
			}
		?>

	<h3>Задание 6</h3>
		<?php 
			$arr = [1,2,3,4,5,6,7,8,9,10,12,13];
			$arr1 = [];
			for ($i=0; $i < count($arr); $i++) { 
				if (isEven($arr[$i])==true) {
					$arr1[]=$arr[$i];
				}
			}
			var_dump($arr1);
		?>

	<h3>Задание 7</h3>
		<?php 
			function getDivisors($num) {
				$arr = [];
				for ($i = 1; $i <= $num; $i++) {
					if ($num % $i == 0) {
						$arr[] = $i;
					}
				}
				
				return $arr;
			}
			var_dump(getDivisors(13));
		?>

	<h3>Задание 8</h3>
		<?php 
			function getCommonDivisors($num1, $num2) {
				return array_intersect(getDivisors($num1), getDivisors($num2));
			}
			var_dump(getCommonDivisors(5,15));
		?>

</body>
</html>