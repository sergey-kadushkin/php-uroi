<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>19</title>
</head>
<body>
	<h1>Задачи на продвинутую работу с формами в PHP</h1>


	<h3>Задание 1</h3>
		<form action="" method="GET">
			<input type="text" name="name1">
			<input type="hidden" name="hello1" value="0">
			<input type="checkbox" name="hello1" value="1">
			<input type="submit">
		</form>
		
		<?php
			if (isset($_REQUEST['name1']) and $_REQUEST['hello1'] == 0) {
				echo 'Прощай '.$_REQUEST['name1'];
			}

			if (isset($_REQUEST['name1']) and $_REQUEST['hello1'] == 1) {
				echo 'Привет '.$_REQUEST['name1'];
			}
		?>
	<h3>Задание 2</h3>
		<form action="" method="GET">
			<p>html<input type="checkbox" name="lang[]" value="html"></p>
			<p>css<input type="checkbox" name="lang[]" value="css"></p>
			<p>php<input type="checkbox" name="lang[]" value="php"></p>
			<p>javascript<input type="checkbox" name="lang[]" value="javascript"></p>
			<input type="submit">
		</form>

		<?php
			if(isset($_REQUEST['lang']))
			{
				echo 'Вы знаете: ' . implode(',', $_REQUEST['lang']);
			}
		?>

	<h3>Задание 3</h3>
		<form action="" method="GET">
			<p>Вы знаете PHP?</p>
			<p>да<input type="radio" name="php" value="1"></p>
			<p>нет<input type="radio" name="php" value="0"></p>
			<input type="submit">
		</form>

		<?php
			if (isset($_REQUEST['php']) and $_REQUEST['php'] == 0) {
				echo 'Вы не знаете PHP';
			}

			if (isset($_REQUEST['php']) and $_REQUEST['php'] == 1) {
				echo 'Вы  знаете PHP!';
			}
		?>


	<h3>Задание 4</h3>
		<form action="" method="GET">
			<p>Сколько вам лет?</p>
			<p>менее 20 лет<input type="radio" name="age" value="1"></p>
			<p>20-25<input type="radio" name="age" value="2"></p>
			<p>26-30<input type="radio" name="age" value="3"></p>
			<p>более 30<input type="radio" name="age" value="4"></p>
			<input type="submit">
		</form>

		<?php
			if (isset($_REQUEST['age']) and $_REQUEST['age'] == 1) {
				echo 'Вам менее 20 лет';
			}

			if (isset($_REQUEST['age']) and $_REQUEST['age'] == 2) {
				echo 'Вам 20-25 лет';
			}

			if (isset($_REQUEST['age']) and $_REQUEST['age'] == 3) {
				echo 'Вам 26-30 лет';
			}

			if (isset($_REQUEST['age']) and $_REQUEST['age'] == 4) {
				echo 'Вам более 30 лет';
			}
		?>


	<h3>Задание 5</h3>
		<form action="" method="GET">
			<select size="5"  name="age5">
				<option disabled>Сколько вам лет?</option>
				<option value="1">менее 20 лет</option>
				<option value="2">20-25</option>
				<option value="3">26-30</option>
				<option value="4">более 30</option>
			</select>
			<input type="submit">
		</form>

			<?php
			if (isset($_REQUEST['age5']) and $_REQUEST['age5'] == 1) {
				echo 'Вам менее 20 лет';
			}

			if (isset($_REQUEST['age5']) and $_REQUEST['age5'] == 2) {
				echo 'Вам 20-25 лет';
			}

			if (isset($_REQUEST['age5']) and $_REQUEST['age5'] == 3) {
				echo 'Вам 26-30 лет';
			}

			if (isset($_REQUEST['age5']) and $_REQUEST['age5'] == 4) {
				echo 'Вам более 30 лет';
			}
			?>
	<h3>Задание 6</h3>
		<form action="" method="GET">
			<select size="5" multiple name="lg[]">
				<option disabled>Какой язык вы знаете?</option>
				<option value="1">html</option>
				<option value="2">css</option>
				<option value="3">php</option>
				<option value="4">javascript</option>
			</select>
			<input type="submit">
		</form>

		<?php
		$str = 'Вы знаете: ';
		foreach ($_REQUEST['lg'] as $elem) {
			if($elem == 1) {
				$str .= 'html, ';
			}
			if($elem == 2) {
				$str .= 'css, ';
			}
			if($elem == 3) {
				$str .= 'php, ';
			}
			if($elem == 4) {
				$str .= 'javascript.';
			}
		}
		echo $str;
		?>
	<h3>Задание 7</h3>
	<?php
		function input($type, $name, $value) {
			return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
		}
		echo input('text', 'input', '1');
	?>

</body>
</html>