<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>23</title>
</head>
<body>
	<h1>Задачи на основы работы с базами данных SQL в PHP
</h1>

	<?php
	//Устанавливаем доступы к базе данных:
		$host = 'php1.ru'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = ''; //пароль, по умолчанию пустой
		$db_name = 'test_db'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
		$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");

	?>
<!--	//Формируем тестовый запрос:
		$query = "SELECT * FROM articles WHERE id > 0";

	//Делаем запрос к БД, результат запроса пишем в $result:
		//$result = mysqli_query($link, $query) or die(mysqli_error($link));

		//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

	//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		var_dump($data);-->
		
	<h3>Задание 1</h3>
		<?php
			$query = "SELECT * FROM articles WHERE id = 3";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 2</h3>
		<?php
			$query = "SELECT * FROM articles WHERE salary = 3466";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>
	<h3>Задание 3</h3>
		<?php
			$query = "SELECT * FROM articles WHERE age = 45";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 3</h3>
		<?php
			$query = "SELECT * FROM articles WHERE salary > 25000";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 4</h3>
		<?php
			$query = "SELECT * FROM articles WHERE salary >= 20000";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 8</h3>
		<?php
			$query = "SELECT age,salary FROM articles WHERE name='Hiro'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 9</h3>
		<?php
			$query = "SELECT * FROM articles WHERE age>25 and age<=28";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 10</h3>
		<?php
			$query = "SELECT * FROM articles WHERE name='Lol'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

		<h3>Задание 12</h3>
		<?php
			$query = "SELECT * FROM articles WHERE name != 'boby'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

		<h3>Задание 13</h3>
		<?php
			$query = "SELECT * FROM articles WHERE age=27 OR salary=45000";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

		<h3>Задание 17 (Добавление)</h3>
		<?php 
			$query = "INSERT INTO articles SET name='Никита', age=26, salary=300";
			mysqli_query($link, $query); 
		 ?>


		<h3>Задание 18 (Добавление)</h3>
		<?php 
			$query = "INSERT INTO articles (name,salary) VALUES ('Светлана', 1200)";
			mysqli_query($link, $query); 
		 ?>

		<h3>Задание 20 (Удаление)</h3>
		<?php 
			$query = "DELETE FROM articles WHERE id=8";
			mysqli_query($link, $query); 
		 ?>

		<h3>Задание 21 (Удаление)</h3>
		<?php 
			$query = "DELETE FROM articles WHERE name='Никита' AND id>37";
			mysqli_query($link, $query); 
		 ?>

		<h3>Задание 23 (update)</h3>
		<?php 
			$query = "UPDATE articles SET salary=10 WHERE name='Tommy'";
			mysqli_query($link, $query); 
		 ?>

		<h3>Задание 24 (update)</h3>
		<?php 
			$query = "UPDATE articles SET age=35 WHERE id<35";
			mysqli_query($link, $query); 
		 ?>

		<h3>Задание 25 (update)</h3>
		<?php 
			$query = "UPDATE articles SET salary=30000 WHERE salary<30000";
			mysqli_query($link, $query); 
		 ?>


</body>
</html>