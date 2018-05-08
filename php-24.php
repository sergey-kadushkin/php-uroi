<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>24</title>
</head>
<body>
	<h1>Задачи на базы данных SQL в PHP
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
		
	<h3>Задание 1 LIMIT</h3>
		<?php
			$query = "SELECT * FROM worcers WHERE id >0 LIMIT 6";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 2 LIMIT</h3>
		<?php
			$query = "SELECT * FROM worcers WHERE id >0 LIMIT 2,3";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 3 Order By</h3>
		<?php
			$query = "SELECT * FROM worcers WHERE id >0 ORDER BY salary";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 4 Order By</h3>
		<?php
			$query = "SELECT * FROM worcers WHERE id >0 ORDER BY salary DESC";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 5 Order By</h3>
		<?php
			$query = "SELECT * FROM worcers WHERE id >0 ORDER BY age LIMIT 2,5";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 8 LIKE</h3>
		<?php
			$query = "SELECT * FROM articles WHERE name LIKE '%ma'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 9 LIKE</h3>
		<?php
			$query = "SELECT * FROM articles WHERE salary LIKE '45000'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 10 LIKE</h3>
		<?php
			$query = "SELECT * FROM worcers WHERE age LIKE '3_'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 10 LIKE</h3>
		<?php
			$query = "SELECT * FROM worcers WHERE name LIKE '%k'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>


</body>
</html>