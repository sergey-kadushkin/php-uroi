<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>14</title>
</head>
<body>
	<h1>Задачи на приемы работы с циклами на PHP</h1>


	<h3>Задание 1</h3>
		<?php
			$str='';
			for ($i=1; $i <=9; $i++) { 
				$str.=$i;
			}
			echo $str;
		?>

	<h3>Задание 2</h3>
		<?php 
			$str='';
			for ($i=9; $i >=1; $i--) { 
				$str.=$i;
			}
			echo $str;
		?>


	<h3>Задание 3</h3>
		<?php 
			$str='';
			for ($i=1; $i <=9; $i++) { 
				$str.='-'.$i;
			}
			echo $str.'-';
		?>

	<h3>Задание 4</h3>
		<?php 
			$str='';
			for ($i=1; $i <=20; $i++) { 
				$str.='x';
				echo $str.'<br>';
			}			
		?>

	<h3>Задание 5</h3>
		<?php 
			for ($i=1; $i <=9; $i++) {
				$str=''; 
				for ($j=0; $j < $i; $j++) { 
					$str.=$i;
				}
				echo $str.'<br>';
			}			
		?>

	<h3>Задание 6</h3>
		<?php 
			$str = '';
			for ($i=1; $i <=5; $i++) { 
				$str.='xx';
				echo $str.'<br>';
			}			
		?>

</body>
</html>