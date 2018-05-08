<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>1</title>
</head>
<body>
	<h1>Задачи на основы языка PHP</h1>
	<h3>Задание 1</h3>
		<?php
			$a = 3;
			echo $a;
		?>

	<h3>Задание 2</h3>
		<?php
			$a = 10;
			$b = 2;
			echo $a + $b;
			echo $a - $b;
			echo $a * $b;
			echo $a / $b;
		?>

	<h3>Задание 3</h3>
		<?php
			$c = 15;
			$d = 2;
			$result = $c + $d;
			echo $result;
		?>

	<h3>Задание 4</h3>
		<?php
			$a = 10;
			$b = 2;
			$c = 5;
			echo $a + $b + $c;
		?>

	<h3>Задание 5</h3>
		<?php
			$a = 17;
			$b = 10;
			$c = $a - $b;
			$d = 7;
			$result = $c + $d;
			echo $result;
		?>

	<h3>Задание 6</h3>
		<?php
			$text = 'Привет, Мир!';
			echo $text;
		?>

	<h3>Задание 7</h3>
		<?php
			$text1 = 'Привет, ';
			$text2 = 'Мир!';
			echo $text1.$text2;
		?>

	<h3>Задание 8</h3>
		<?php
			$a = 3;
			echo $a;
		?>

	<h3>Задание 8</h3>
		<?php
			$name = 'Дима';
			echo 'Привет, '.$name.'!';
		?>

	<h3>Задание 9</h3>
		<?php
			$age = 25;
			echo 'Мне '.$age.' лет!';
		?>

	<h3>Задание 10</h3>
		<?php
			$text = 'abcde';
			echo $text[0]; //выведем букву 'a'
			echo $text[2]; //выведем букву 'c'
			echo $text[4]; //выведем букву 'e'
		?>

	<h3>Задание 11</h3>
		<?php
			$text = 'abcde';
			$text[0] = '!';
			echo $text; //выведет '!bcde'
		?>

	<h3>Задание 12</h3>
		<?php
			$num = '12345';
			echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
		?>

	<h3>Задание 13</h3>
		<?php
			$a = 60*60;
			echo 'in hour '.$a.'<br>';
			$a = $a*24;
			echo 'in day '.$a.'<br>';
			$a = $a*31;
			echo 'in month '.$a; 
		?>

	<h3>Задание 14</h3>
		<?php
			$hour = '10';
			$minute = '43';
			$seconds = '43';
			echo $hour.':'.$minute.':'.$seconds;
		?>

	<h3>Задание 15</h3>
		<?php
			$a = 3;
			echo $a * $a;
		?>

	<h3>Задание 16</h3>
		<?php
			$var = 47;
			$var += 7;
			$var -= 18;
			$var *= 10;
			$var /= 20;
			echo $var;
		?>

	<h3>Задание 17</h3>
		<?php
			$text = 'Я';
			$text .= ' хочу';
			$text .= ' знать';
			$text .= ' PHP!';
			echo $text
		?>

	<h3>Задание 18</h3>
		<?php
			$var = 10;
			$var++;
			$var++;
			$var--;
			echo $var;
		?>

	<h3>Задание 19</h3>
		<?php
			$var = 10;
			$var += 7;
			$var++;
			$var--;
			$var += 12;
			$var *= 7;
			$var -=15;
			echo $var;
		?>


</body>
</html>