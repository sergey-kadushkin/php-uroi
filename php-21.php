<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>21</title>
</head>
<body>
	<h1>Практика по написанию простых скриптов PHP</h1>

	<h3>Задание 1</h3>
	<?php
		$res = mktime(0, 0, 0, 1, 1, date('Y')+1) - time();

		$d = ceil($res /86400);
		echo 'До Нового Года осталось: ' . $d . ' дней'
		?>

	<h3>Задание 2</h3>
		<form action="" method="post">
			<input type="text" name="year2" value="" placeholder="Введите год">
			<input type="submit">
		</form>

		<?php

		$year = $_POST['year2'];

		if($year){

			$res = date('L', mktime(0, 0, 0, 2, 1, $year));

			if($res == 1){
				echo 'високосный год';
			}else{
				echo 'не високосный год';
			}

		}

		?>
	<h3>Задание 3</h3>
		<form action="" method="post">
			<input type="text" name="date3" value="" placeholder="DD.MM.YYYY">
			<input type="submit">
		</form>

		<?php

		$date = $_POST['date3'];

		if($date){

			$arr = explode('.', $date);
			$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];


			$d = date('w', mktime(0, 0, 0, $arr[1], $arr[0], $arr[2]));

			echo $week[$d];
		}

			?>
	<h3>Задание 4</h3>
		<?php

		$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
		$d = date('w', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
		$d = $week[$d];

		$m_arr = [1=>'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Ноябрь', 'Декабрь'];
		$m = date('n', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
		$m = $m_arr[$m];

		echo date('d') . ' ' . $m . ' ' . date('Y') . ' год, ' . $d; 

		?>
	<h3>Задание 5</h3>
		<form action="" method="post">
			<input type="text" name="date5" value="" placeholder="DD.MM.YYYY">
			<input type="submit">
		</form>


		<?php

		$date = $_POST['date5'];

		if($date){

			$arr = explode('.', $date);

			$date_x = mktime(0, 0, 0, $arr[1], $arr[0], date('Y'));

			if($date_x < time()){

				$date_x = mktime(0, 0, 0, $arr[1], $arr[0], date('Y')+1);

			}

			$res = $date_x - time();
			$res = ceil($res /86400);

			echo 'до Дня Рождения осталось: ' . $res . ' дней';
		}

		?>

		<h3>Задание 8</h3>
		<?php
		$arr = ['Новый Год' => '01.01', 'Рождество' => '01.07', 'День Победы' => '09.05' ];

		$date = date('d.m', time());


		foreach($arr as $key=>$elem){

			if($date == $elem){

				echo 'Сегодня празднуют: ' . $key . '!<br> C Праздником!';
			}
		}

		?>

		<h3>Задание 10</h3>
			<form action="" method="post">
				<textarea name="text" id="" cols="30" rows="10"></textarea>
				<input type="submit">
			</form>

			<?php


			if( $_POST['text']){

				$text = $_POST['text'];


				$words = str_word_count($text);
				$all_symbols = strlen($text);
				$symbols = explode(' ', $text);
				$symbols = implode('', $symbols);
				$symbols = strlen($symbols);

				echo $words . ' слолов, ' . $all_symbols . ' симвлов, ' . $symbols . ' симвлов без пробелов';

			}

			?>
		<h3>Задание 11</h3>
			<form action="" method="post">
				<textarea name="text11" id="" cols="30" rows="10"></textarea>
				<input type="submit">
			</form>

			<?php

			if( $_POST['text11']){

				$text = $_POST['text11'];



				$text = explode(' ', $text);
				$text = implode('', $text);
				$length = strlen($text);
				$text = str_split($text);

				$text = array_count_values($text);


				function func($el){

					global $length;
					return floor($el * 100 / $length);
				}

				$res = array_map('func', $text);

				foreach($res as $key => $val){

					echo $key . ' ' . $val . '%<br>';

				}

			}

			?>
		<h3>Задание 12</h3>
			<form action="" method="post">
				<input type="text" name="str12" value="">
				<input type="submit">
			</form>

			<?php

			$arr = ['botany', 'exist', 'rhyme', 'insect', 'ride', 'epitomize', 'climate', 'scrip', 'speculator'];

			if( $_POST['str12']){

				$str = $_POST['str12'];

				foreach($arr as $el){

					$res = strpbrk($el, $str);
					if($res == true){
						echo $el . '<br>';
					}

				}

			}

			?>
		<h3>Задание 13</h3>
			<form action="" method="post">
				<textarea name="text" id="" cols="30" rows="10" placeholder="Введите слова через пробел"></textarea>
				<input type="submit">
			</form>

			<?php

			if($_POST['text']){

				$text = $_POST['text'];
				$text = explode(' ', $text);
				sort($text);

				foreach($text as $el){

					$letters[] = substr($el, 0, 1);
				}

				$letters = array_unique($letters);

				foreach($letters as $elem){

					echo 'слова на букву ' . $elem . ':<br>';

					foreach($text as $val){
						$letter = substr($val, 0, 1);

						if($letter == $elem){
							echo $val . '<br>';
						}
					}


				}
			}

			?>


</body>
</html>