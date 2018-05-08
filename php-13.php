<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>13</title>
</head>
<body>
	<h1>Задачи на приемы работы с логическими значениями
</h1>


	<h3>Задание 1</h3>
		<?php
			function func1($a,$b) {
				return $a==$b;
			}
			$gor = func1(12,23);
			if ($gor===true) {
				echo 'true';
			} else {
				echo 'false';
			}
		?>

	<h3>Задание 2</h3>
		<?php 
			function func2($a,$b) {
				return $a + $b > 10;
			}
			$gor = func2(12,23);
			if ($gor===true) {
				echo 'true';
			} else {
				echo 'false';
			}
		?>


	<h3>Задание 3</h3>
		<?php 
			function func3($a) {
				return $a<0;
			}
			$gor = func3(-12);
			if ($gor===true) {
				echo 'true';
			} else {
				echo 'false';
			}
		?>

</body>
</html>