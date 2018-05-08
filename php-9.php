<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>9</title>
</head>
<body>
	<h1>Практика на работу с формами</h1>


	<h3>Задание 1</h3>
	<form action="" method="GET">
		<input type="text" name="name1">
		<input type="submit">
	</form>

		<?php
			if (isset($_REQUEST['name1'])) {
				$name = $_REQUEST['name1'];
				echo 'Привет,'.$name;
			}
		?>

	<h3>Задание 2</h3>
	<form action="" method="GET">
		<p>Name<br><input type="text" name="name2"></p>
		<p>age<br><input type="text" name="age2"></p>
		<textarea name="message2"></textarea>
		<input type="submit" name="submit2">
	</form>

		<?php
		if (isset($_REQUEST['submit2'])) {
			$age = strip_tags($_REQUEST['age2']);
			$name = strip_tags($_REQUEST['name2']);
			$message = strip_tags($_REQUEST['message2']);
			echo "Привет, $name, $age <br> твое сообщение: $message";
		}
		?>

		<h3>Задание 3</h3>
			<?php
			if (!isset($_REQUEST['age3'])) {
				?>
				<form action="" method="GET">
					<input type="text" name="age3">
					<input type="submit">
				</form>
				<?php
			}
			?>

			<?php
			if (isset($_REQUEST['age3'])) {
				$age = strip_tags($_REQUEST['age3']);
				echo 'Ваш возраст: '.$age;
			}
			?>

	<h3>Задание 4</h3>
		<form action="" method="GET">
			<p>Login<br><input type="text" name="login"></p>
			<p>Password<br><input type="password" name="pass"></p>
			<input type="submit" name="submit4">
		</form>

		<?php
		if (isset($_REQUEST['submit4'])) {
			$login = 'user';
			$pass = '123456';
			$formLogin = trim($_REQUEST['login']);
			$formPass = trim($_REQUEST['pass']);
			if ($login == $formLogin and $pass == $formPass) {
				echo 'Доступ разрешен!';
			} else {
				echo 'Доступ запрещен!';
			}
		}
		?>
	<h3>Задание 5</h3>
		<form action="" method="GET">
			<input name="name5" value="<?php if (isset($_GET['name5'])) echo $_GET['name5']; ?>">
			<input type="submit" name="submit5">
		</form>
		<?php
			if (isset($_REQUEST['submit5'])) {
				$name = $_REQUEST['name5'];
				echo $name;
			}
		?>
	<h3>Задание 6</h3>

		<form action="" method="GET">
			<input name="name6" value="<?php if (isset($_GET['name6'])) echo $_GET['name6']; ?>"><br>
			<textarea name="message6">
				<?php if (isset($_GET['message6'])) echo $_GET['message6']; ?>
			</textarea><br>
			<input type="submit">
		</form>

</body>
</html>