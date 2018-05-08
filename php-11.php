<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>11</title>
</head>
<body>
	<h1>Практика на работу с function</h1>


	<h3>Задание 1</h3>
		<?php 
			function func1($num){
				return $num*$num;
			}
			echo func1(12);
		?>

	<h3>Задание 2</h3>
		<?php 
			function func2($num1, $num2){
				return $num1+$num2;
			}
			echo func2(2,3);
		?>


	<h3>Задание 3</h3>
		<?php 
			function func3($a, $b, $c){
				return (($a-$b)/$c);
			}
			echo func3(2,3,5);
		?>

	<h3>Задание 4</h3>
		<?php
			function func4($day)
			{
				$week = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
				return $week[$day];
			}
			echo func4(2);
		?>

</body>
</html>