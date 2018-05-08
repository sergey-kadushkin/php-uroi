<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>12</title>
</head>
<body>
	<h1>Практика на работу с Flags</h1>


	<h3>Задание 1</h3>
		<?php
			$arr = [1,2,3,4,5,6,7,8,9,0];
			$flag = false; //считаем, что элемента 5 нету в массиве
			
			foreach ($arr as $elem) {
				if ($elem == 5) {
					$flag = true; //элемент есть - переопределим переменную $flag
					break;
				}
			}
			
			if ($flag === true) {
				echo 'Есть';
			} else {
				echo 'Нет';
			}
		?>

	<h3>Задание 2</h3>
		<?php 
			$num = 31;
			$flag = false;

			for ($i=2; $i < 31; $i++) { 
				if ($num%$i==0) {
					$flag = true;
					break;
				}
			}

			if ($flag === true) {
				echo 'Yes';
			} else {
				echo "No";
			}
		?>


	<h3>Задание 3</h3>
		<?php 
			$arr = [2,3,4,5,6,677,677,2,3,3];
			$flag = false;

			foreach ($arr as $key=>$elem) {
				if ($key > 0 and $elem == $arr[$key - 1]) {
					$flag = true;
					break;
				}
			}

			if ($flag === true) {
				echo 'Yes';
			} else {
				echo "No";
			}
		?>

</body>
</html>