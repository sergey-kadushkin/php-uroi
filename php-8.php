<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>8</title>
</head>
<body>
	<h1>Практика на комбинации функций</h1>
	<h3>Задание 1</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			echo array_sum($arr) / count($arr);
		?>

	<h3>Задание 2</h3>
		<?php
			echo array_sum(range(1,100));
		?>

	<h3>Задание 3</h3>
		<?php
			$arr = range(1, 100);
			echo implode('<br>', $arr);
		?>

	<h3>Задание 4</h3>
		<?php
			$arr = array_fill(0, 10, 'x');
			var_dump($arr);
		?>

	<h3>Задание 5</h3>
		<?php
			$arr = range(1,10);
			shuffle($arr);
			var_dump($arr);
		?>

	<h3>Задание 6</h3>
		<?php
			$n = 10;
			$arr = range(1, $n);
			echo(array_product($arr));
		?>

	<h3>Задание 7</h3>
		<?php
			$num = 123;
			$arr = str_split($num, 1);
			echo array_sum($arr);
		?>

	<h3>Задание 8</h3>
		<?php
			$str = 'abcde';
			$str = strrev(ucfirst(strrev($str)));
			echo $str;
		?>

	<h3>Задание 9</h3>
		<?php
			$arr = [1, 4, 5, 7, 9];
			$result = array_map('sqrt', $arr);
			var_dump($result);;
		?>

	<h3>Задание 10</h3>
		<?php
			$keys = range('a', 'z');
			$elems = range(1, 26);
			$arr = array_combine($keys, $elems);
			var_dump($arr);
		?>

	<h3>Задание 11</h3>
		<?php
			$str = '1234567890';
			$result = array_sum(str_split($str, 2));
			echo $result;
		?>

</body>
</html>