<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>10</title>
</head>
<body>
	<h1>Практика на работу с Dates</h1>


	<h3>Задание 1</h3>
		<?php 
			echo time();
		?>
	<h3>Задание 2</h3>
		<?php
			echo mktime(0, 0, 0, 3, 1, 2025);
		?>
	<h3>Задание 3</h3>
		<?php
			echo mktime(0,0,0,12,31);
		?>
	<h3>Задание 4</h3>
		<?php
			echo time()-mktime(13,12,59,3,15,2000);
		?>
	<h3>Задание 5</h3>
		<?php
			$sec = time() - mktime(7, 23, 48); //количество часов
			echo floor($sec / (60 * 60));
		?>
	<h3>Задание 6</h3>
		<?php
			echo date('m-d-Y H:i:s');
		?>
	<h3>Задание 7</h3>
		<?php
			echo date('Y-m-d').'<br>'; //в формате '2025-12-31'
			echo date('d.m.Y').'<br>'; //в формате '31.12.2025'
			echo date('d.m.y').'<br>'; //в формате '31.12.13'
			echo date('H:i:s'); //в формате '12:59:59'
		?>
	<h3>Задание 8</h3>
		<?php
			echo date('d.m.Y',  mktime(0, 0, 0, 2, 12, 2025));
		?>

	<h3>Задание 9</h3>
	<?php
		$week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
		echo $week[date('w',  mktime(0, 0, 0, 6, 6, 2006))];
	?>
	<h3>Задание 10</h3>
	<?php
		$month = [
			1=>'янв', 'фев', 'мар', 'апр', 'май', 'июнь',
			'июль', 'авг', 'сен', 'окт', 'ноя', 'дек'
		];
		echo $month[date('n')];
	?>
	<h3>Задание 11</h3>
		<?php
			echo date('t');
		?>
	<h3>Задание 12</h3>
		<form action="" method="GET">
			<input type="text" name="year1">
			<input type="submit">
		</form>

		<?php
			if (isset($_REQUEST['year1'])) {
				$year = $_REQUEST['year1'];
				if (date('L', mktime(0, 0, 0, 1, 1, $year)) == 1) {
					echo 'год високосный';
				} else {
					echo 'год не високосный';
				}
			}
		?>
	<h3>Задание 13</h3>
		<form action="" method="GET">
			<input type="text" name="date13">
			<input type="submit">
		</form>

		<?php
			if (isset($_REQUEST['date13'])) {
				$date = explode('.', $_REQUEST['date13']);
				$week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
				echo $week[date('w',  mktime(0, 0, 0, $date[1], $date[0], $date[2]))];
			}
		?>
	<h3>Задание 14</h3>
		<form action="" method="GET">
			<input type="text" name="date14">
			<input type="submit">
		</form>

		<?php
			if (isset($_REQUEST['date14'])) {
				$date = explode('-', $_REQUEST['date14']);
				$month = [
					1=>'янв', 'фев', 'мар', 'апр', 'май', 'июнь',
					'июль', 'авг', 'сен', 'окт', 'ноя', 'дек'
				];
				echo $month[date('n',  mktime(0, 0, 0, $date[1], $date[2], $date[0]))];
			}
		?>
	<h3>Задание 15</h3>
		<form action="" method="GET">
			<input type="text" name="date15">
			<input type="text" name="date25">
			<input type="submit">
		</form>

		<?php
			if (isset($_REQUEST['date15']) and isset($_REQUEST['date25'])) {
				$date1 = $_REQUEST['date15'];
				$date2 = $_REQUEST['date25'];
				if ($date1 > $date2) {
					echo $date1;
				} else {
					echo $date2;
				}
			}
		?>
	<h3>Задание 16</h3>
		<?php 
			echo date('d-m-Y', strtotime('2025-12-31'));
		?>

	<h3>Задание 18</h3>
		<?php

			//2 day
				$date = date_create('2015-12-31');
				echo date_format($date, 'd.m.Y').'<br>';
				date_modify($date, '2 day');
				echo date_format($date, 'd.m.Y').'<br>';

			//1 month and 3 day
				$date = date_create('2015-12-31');
				date_modify($date, '1 month 3 day');
				echo date_format($date, 'd.m.Y').'<br>';

			//1 year
				$date = date_create('2015-12-31');
				date_modify($date, '1 year');
				echo date_format($date, 'd.m.Y').'<br>';

			//-3day
				$date = date_create('2015-12-31');
				date_modify($date, '-3 day');
				echo date_format($date, 'd.m.Y');
		?>
	<h3>Задание 19</h3>
	<?php
		//Последняя секунда 31-го декабря текущего года:
		$time = mktime(23, 59, 59, 12, 31);
		
		//Первая секунда нового года:
		$time = $time + 1;
		
		//Отнимем от этого момента текущий и преобразуем в дни:
		echo floor(($time - time()) / (60 * 60 * 24));
	?>
	<h3>Задание 21</h3>
		<?php
			$date = date_create();
			date_modify($date, '-100 day');
			$num = date_format($date, 'w');

			$week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
			echo $week[$num];
		?>

</body>
</html>