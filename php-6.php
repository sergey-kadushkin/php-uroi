<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>6</title>
</head>
<body>
	<h1>Задачи на функции работы со строками в PHP</h1>
	<h3>Задание 1</h3>
		<?php
			$p = 'php';
			echo strtoupper($p);
		?>

	<h3>Задание 2</h3>
		<?php
			$p = 'PHP';
			echo strtolower($p);
		?>

	<h3>Задание 3</h3>
		<?php
			$p = 'london';
			echo $p.'->'.ucfirst($p);
		?>

	<h3>Задание 4</h3>
		<?php
			$p = 'London';
			echo $p.'->'.lcfirst($p);
		?>

	<h3>Задание 5</h3>
		<?php
			$p = 'london is the capital of great britain';
			echo $p.' -> '.ucwords($p);
		?>

	<h3>Задание 6</h3>
		<?php
			$p = 'LONDON';
			echo $p.' -> '.ucfirst(strtolower($p));
		?>

	<h3>Задание 7</h3>
		<?php
			echo strlen('html css php');
		?>

	<h3>Задание 8</h3>
		<?php
			$password = '123456789';
			$len = strlen($password);
			
			if ($len > 5 and $len < 10) {
				echo 'Пароль подходит';
			} else {
				echo 'Пароль не подходит, придумайте другой';
			}
		?>

	<h3>Задание 9</h3>
		<?php
			echo substr('html css php', 0, 4); //html
			echo substr('html css php', 5, 3); //css
			echo substr('html css php', 9, 3); //php
		?>

	<h3>Задание 10</h3>
		<?php
			echo substr('123456789', -3); //789
		?>

	<h3>Задание 11</h3>
		<?php
			$str = 'http://phphtml.net';
			if (substr($str, 0, 7) == 'http://') {
				echo 'Да';
			} else {
				echo 'Нет';
			}
		?>

	<h3>Задание 12</h3>
		<?php
			$str = 'http://phphtml.net';
			$check1 = substr($str, 0, 7);
			$check2 = substr($str, 0, 8);
			if ($check1 == 'http://' or $check2 == 'https://') {
				echo 'Да';
			} else {
				echo 'Нет';
			}
		?>

	<h3>Задание 16</h3>
		<?php
			echo str_replace('.', '-', '31.12.2013');
		?>

	<h3>Задание 17</h3>
		<?php
			echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'abcabc'); //выведет '123123'
		?>

	<h3>Задание 18</h3>
		<?php
			echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', '1a2b3c4b5d6e7f8g9h0');
		?>

	<h3>Задание 19</h3>
		<?php
			$str = 'abcabc';
			echo strtr($str, 'abc', '123'); //выведет '123123'
		?>

	<h3>Задание 20</h3>
		<?php
			$str = '1234567890';
			echo substr_replace($str, '!!!', 3, 5); //выведет '123!!!90'
		?>

	<h3>Задание 21</h3>
		<?php
			echo strpos('abc abc abc', 'b'); //выведет 1
		?>

	<h3>Задание 22</h3>
		<?php
			echo strrpos('abc abc abc', 'b'); //выведет 9
		?>

	<h3>Задание 25</h3>
		<?php
			$str = 'aaa..aaaa';
			if(strpos($str, '..') !== false) {
				echo 'Да';
			} else {
				echo 'Нет';
			}
		?>

	<h3>Задание 26</h3>
		<?php
			$str = 'http://phphtml.net';
	
			//Проверяем, что строка начинается с http://:
			if(strpos($str, 'http://') === 0) {
				echo 'Да';
			} else {
				echo 'Нет';
			}
		?>	

	<h3>Задание 27</h3>
		<?php
			$arr = explode(' ', 'html css php');
			var_dump($arr);
		?>

	<h3>Задание 28</h3>
		<?php
			$arr = ['html', 'css', 'php'];
			echo implode(',', $arr);
		?>

	<h3>Задание 29</h3>
		<?php
			$date = '2013-12-31';
			$arr = explode('-', $date);
			echo $arr[2].'.'.$arr[1].'.'.$arr[0];
		?>

	<h3>Задание 30</h3>
		<?php
			var_dump(str_split('1234567890', 2));
		?>

	<h3>Задание 33</h3>
		<?php
			$str = ' строка ';
			echo trim($str);
		?>

	<h3>Задание 35</h3>
		<?php
			$str = 'слова слова слова.';
			echo rtrim($str, '.').'.';
		?>
	
	<h3>Задание 39</h3>
		<?php
			$str = 'qwertyuiopasdfghjklzxcvbnm'; //все латинские буквы
			$newStr = str_shuffle($str); //перемешиваем их
			echo substr($newStr, 0, 6); //берем первые 6 символов
		?>

	<h3>Задание 42</h3>
		<?php
			for ($i = 1; $i <= 9; $i++) {
				echo str_repeat($i , $i).'<br>';
			}
		?>

	<h3>Задание 55</h3>
		<?php
			$arr = explode('_', 'var_test_text');
			$str = '';
			foreach ($arr as $key=>$elem) {
				if($key != 0) {
					$str .=  ucfirst($elem);
				} else {
					$str .= $elem;
				}
			}
			echo $str;
		?>

	<h3>Задание 56</h3>
		<?php
			$str = '12345 67890';
			$arr = explode(' ', $str);
			$arr[0] = strrev($arr[0]);
			$arr[1] = strrev($arr[1]);
			echo implode(' ', $arr);
		?>


</body>
</html>