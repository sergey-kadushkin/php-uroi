<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>18</title>
</head>
<body>
	<h1>Продвинутая работа с пользовательскими функциями в PHP</h1>


	<h3>Задание 1</h3>
		<?php
			function cut($str, $lim = 10)
			{
				return substr($str, 0, $lim);
			}

			echo cut('Sergey',3);
		?>

	<h3>Задание 2</h3>
		<?php 
			function printArr($arr)
			{
				echo array_shift($arr) . '<br>';
				if (!empty($arr)) {
					echo printArr($arr);
				}
			}
			$arr2 = [1,2,3,4,5];
			printArr($arr2); 
		?>

	<h3>Задание 3</h3>
		<?php 
			function digit($num) 
			{ 
				static $result; 
				$result = array_sum(str_split($num , 1)); 
				if ($result > 9) { 
					digit($result); 
				} 
				return $result; 
			}
			echo digit(1998); 
		?>
</body>
</html>