<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>2</title>
</head>
<body>
	<h1>Основы работы с массивами в PHP</h1>
	<h3>Задание 1</h3>
		<?php
			$arr = ['a', 'b', 'c'];
			var_dump($arr)
		?>

	<h3>Задание 2</h3>
		<?php
			$arr = ['a', 'b', 'c'];
			echo $arr[0].'<br>';
			echo $arr[1].'<br>';
			echo $arr[2].'<br>';
		?>

	<h3>Задание 3</h3>
		<?php
			$arr = ['a', 'b', 'c', 'd'];
			echo $arr[0].'+'. $arr[1].', '.$arr[2].'+'.$arr[3]; 
		?>

	<h3>Задание 4</h3>
		<?php
			$arr = [2, 5, 3, 9];
			$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
			echo $result;
		?>

	<h3>Задание 5</h3>
		<?php
			$arr[] = 1;
			$arr[] = 2;
			$arr[] = 3;
			$arr[] = 4;
			$arr[] = 5;

			var_dump($arr);
		?>

	<h3>Задание 6</h3>
		<?php
			$arr = ['a'=>1, 'b'=>2, 'c'=>3];
			echo $arr['c'];
		?>

	<h3>Задание 7</h3>
		<?php
			$arr = ['a'=>1, 'b'=>2, 'c'=>3];
			echo $arr['a'] + $arr['b'] + $arr['c'];
		?>

	<h3>Задание 8</h3>
		<?php
			$a = 3;
			echo $a;
		?>

	<h3>Задание 8</h3>
		<?php
			$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
			echo $arr['Петя'].' '.$arr['Коля'];
		?>

	<h3>Задание 9</h3>
		<?php
			$arr = [1=>'пн', 2=>'вт', 3=>'ср', 4=>'чт', 5=>'пт', 6=>'сб', 7=>'вс'];
			echo $arr[4];
		?>

	<h3>Задание 10</h3>
		<?php
			$arr = [1=>'пн', 2=>'вт', 3=>'ср', 4=>'чт', 5=>'пт', 6=>'сб', 7=>'вс'];
			$day = 3;

			echo $arr[$day];
		?>

	<h3>Задание 11</h3>
		<?php
			$arr = [
				'cms'=>['joomla', 'wordpress', 'drupal'],
				'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
			];

			echo $arr['cms'][0]; //joomla
			echo $arr['cms'][2]; //drupal;
			echo $arr['colors']['green']; //зеленый
			echo $arr['colors']['red']; //красный
		?>

	<h3>Задание 12</h3>
		<?php
			$arr = [
				'ru'=>[1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
				'en'=>[1=>'mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
			];

			echo $arr['ru'][1]; //пн
			echo $arr['en'][2]; //wd
		?>

	<h3>Задание 13</h3>
		<?php
			$arr = [
					'ru'=>['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
					'en'=>['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
			];
			$lang = 'ru';
			$day = 3;

			echo $arr[$lang][$day]; //ср

		?>

</body>
</html>