<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>25</title>
</head>
<body>
	<h1>Практика PHP для новичков
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
		

		

	<?php
	

	if (isset($_REQUEST['del_id'])) {
		$id = $_REQUEST['del_id'];
		$queryDelete = deliteUser($id);
		mysqli_query($link, $queryDelete) or die(mysqli_error($link));
	}
	if (!empty($_REQUEST['delArr'])) {
		$delArr = $_REQUEST['delArr'];
		foreach ($delArr as $item) {
			$query = deliteUser($item);
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
		}
	}
	if (!empty($_REQUEST['salaryFilter'])){
		$salaruFilter = $_REQUEST['salaryFilter'];
		$query = "SELECT * FROM worcers WHERE salary = $salaruFilter";
	} else {
		$query = "SELECT * FROM worcers";
	}


	function deliteUser($id)
	{
		$query = "DELETE FROM worcers WHERE id >0";
		return $query;
	}



	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		?>


		<form action="" method="get">
			<p>Фильтр по зарплате</p>
			<input type="text" name="salaryFilter" value="<?php if (isset($_REQUEST['salaryFilter'])) echo $salaruFilter;?>">
			<input type="submit"><br><br>
			<table class="table">
				<tr>
					<?php 
						$keys = array_keys($data[0]);
						foreach ($keys as $key){ ?>
							<th><?=$key;?></th>
						}
						?>
				</tr>
				<?php foreach ($data as $arr): ?>
					<tr>
						<?php foreach ($arr as $item): ?>
							<td><?=$item;?></td>
						<?php endforeach; ?>
						<td><a href="php-25.php?del_id=<?= $arr['id']; ?>">Delete</a></td>
						<td>
							<input type="checkbox" name="delArr[]" value="<?=$arr['id'];?>">
						</td>
						<td><a href="edit.php?edit_id=<?= $arr['id']; ?>">Edit</a></td>
					</tr>
				<?php endforeach;?>
			</table><br>
			<input type="submit" name="del" value="Удалить выбранных">
		</form>
		<form method="get" action="add.php">
			<input type="submit" name="addUser" value="Добавить">
		</form>





</body>
</html>