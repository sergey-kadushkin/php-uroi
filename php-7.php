<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>7</title>
</head>
<body>
	<h1>Задачи на функции работы с массивами в PHP</h1>
	<h3>Задание 1</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			echo count($arr);
		?>

	<h3>Задание 3</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			var_dump(in_array(3, $arr));
		?>

	<h3>Задание 4</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			echo array_sum($arr);
		?>

	<h3>Задание 5</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			echo array_product($arr);
		?>

	<h3>Задание 6</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			echo array_sum($arr) / count($arr);
		?>

	<h3>Задание 7</h3>
		<?php
			$arr = range(1, 100);
			var_dump($arr);
		?>

	<h3>Задание 8</h3>
		<?php
			$arr = range('a', 'z');
			var_dump($arr);
		?>

	<h3>Задание 9</h3>
		<?php
			echo implode('-', range(1, 9));
		?>

	<h3>Задание 10</h3>
		<?php
			echo array_sum(range(1, 100));
		?>

	<h3>Задание 11</h3>
		<?php
			echo array_product(range(1, 10));
		?>

	<h3>Задание 12</h3>
		<?php
			$arr1 = [1, 2, 3];
			$arr2 = ['a', 'b', 'c'];
			$result = array_merge($arr1, $arr2);
			var_dump($result);
		?>

	<h3>Задание 14</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			array_splice($arr, 1, 2);
			var_dump($arr);
		?>

	<h3>Задание 16</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			array_splice($arr, 3, 0, ['a', 'b', 'c']);
			var_dump($arr);
		?>

	<h3>Задание 17</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			array_splice($arr, 1, 0, ['a', 'b']);
			array_splice($arr, 6, 0, ['c']);
			array_splice($arr, 8, 0, ['e']);
			var_dump($arr);
		?>

	<h3>Задание 18</h3>
		<?php
			$arr = ['a'=>1, 'b'=>2, 'c'=>3];
			$keys = array_keys($arr);
			$values = array_values($arr);
			var_dump($keys);
			var_dump($value);
		?>

	<h3>Задание 19</h3>
		<?php
			$keys = ['a', 'b', 'c'];
			$values = [1, 2, 3];
			var_dump(array_combine($keys, $values));
		?>

	<h3>Задание 21</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			$arr = array_reverse($arr);
			var_dump($arr);
		?>

	<h3>Задание 22</h3>
		<?php
			$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
			echo array_search('-', $arr);
		?>

	<h3>Задание 24</h3>
		<?php
			$arr = ['a', 'b', 'c', 'd', 'e'];
			$result = array_replace($arr, [0=>'!', 3=>'!!']);
			var_dump($arr);
		?>

	<h3>Задание 28</h3>
		<?php
			$arr = [1, 2, 3, 4, 5];
			shuffle($arr);
			var_dump($arr);
		?>

	<h3>Задание 32</h3>
		<?php
			$arr = ['a', 'b', 'c', 'b', 'a'];
			$arr = array_unique($arr);
			var_dump($arr);
		?>

	<h3>Задание 35</h3>
		<?php
			$arr = [1, 2, 3, 4, 5, 6, 7, 8];

			$str = '';
			while (count($arr) > 0) {
				$str .= array_shift($arr);
				$str .= array_pop($arr);
			}

			echo $str;
		?>


	<h3>Задание 42</h3>
		<?php
			$arr = [' a ', ' b ', ' с '];
			$result = array_map('trim', $arr);
			var_dump($result);
		?>

	<h3>Задание 45</h3>
		<?php
			echo array_sum(str_split('1234567890', 1));
		?>

	<h3>Задание 46</h3>
		<?php
			$keys = range('a', 'z');
			$values = range(1, 26);
			$arr = array_combine($keys, $values);
			var_dump($arr);
		?>


</body>
</html>