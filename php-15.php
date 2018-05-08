<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>15</title>
</head>
<body>
	<h1>Задачи на приемы работы с массивами на PHP</h1>


	<h3>Задание 1</h3>
		<?php
			$arr=[];
			$str='';
			for ($i=1; $i <=4; $i++) { 
				$str.='x';
				$arr[$i] = $str;
			}
			var_dump($arr);
		?>

	<h3>Задание 2</h3>
		<?php 
			$arr=[];
			for ($i=1; $i <=4; $i++) { 
				$str='';
				for ($j=0; $j < $i; $j++) { 
					$str.=$i;
					$arr[$i] = $str;
				}
			}
			var_dump($arr);
		?>


	<h3>Задание 3</h3>
		<?php 
			function arrayFill($elem,$n) {
				$arr=[];
				for ($i=1; $i <=$n; $i++) { 
					$arr[$i] = $elem;
				}
				var_dump($arr);
			}

			arrayFill('x',5);
		?>

	<h3>Задание 4</h3>
		<?php 
			$arr = [1,2,3,4,5,6,7,8,9];
			$sum = 0;
			$kol = 0;
			for ($i=0; $i <= count($arr); $i++) { 
				$sum+=$arr[$i];
				$kol++;
				if ($sum>10) {
					break;
				}
			}
			echo $kol;			
		?>

	<h3>Задание 5</h3>
		<?php 
			$arr = [[1, 2, 3], [4, 5], [6]];
			$sum = 0;
			for ($i=0; $i <=count($arr); $i++) { 
				for ($j=0; $j < count($arr[$i]); $j++) { 
					$sum+=$arr[$i][$j];
				}
			}
			echo $sum;
		?>

	<h3>Задание 6</h3>
		<?php 
			$arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
			$sum = 0;
			for ($i=0; $i <=count($arr); $i++) { 
				for ($j=0; $j < count($arr[$i]); $j++) { 
					for ($k=0; $k < count($arr[$i][$j]); $k++) { 
						$sum+=$arr[$i][$j][$k];
					}
					
				}
			}
			echo $sum;		
		?>

	<h3>Задание 7</h3>
		<?php 
			$arr = [];
			$k = 0;
			for ($i=0; $i < 3; $i++) { 
				for ($j=0; $j < 3; $j++) { 
					$k++;
					$arr[$i][$j] = $k;
				}
			}
			var_dump($arr);
		?>

</body>
</html>