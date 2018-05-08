<?php function showAddForm() {?>
    <div class="form">
        <form action="" method="post">
            <p><input type="text" class="form-control" name="name" placeholder="Ваше имя"></p>
            <p><textarea name="text" class="form-control" placeholder="Ваш отзыв"></textarea></p>
            <p><input type="submit" class="btn btn-block btn-info" name="addNote" value="Сохранить"></p>
        </form>
    </div>
<?php } ?>

<?php function showAlert() {?>
    <div class="alert alert-info">Запись успешно сохранена!</div>
<?php } ?>

<?php function showNotes($date, $name, $text) {?>
    <div class="note">
        <p>
            <span class="date"><?=$date;?></span>
            <span class="name"><?=$name;?></span>
        </p>
        <p><?=$text;?></p>
    </div>
<?php }; ?>

<?php function showPagination($count)
{
    $max = ceil($count / 3);
    if (!empty($_REQUEST['page_id'])) {
        $pageId = $_REQUEST['page_id'];
    } else {
        $pageId = 1;
    }
    ?>
    <div>
        <nav>
            <ul class="pagination">
                <li<?php if ($pageId == 1) echo ' class="disabled"';?>><a href="index.php?page_id=1"><span>«</span></a></li>
                <?php for ($i = 1; $i <= $max; $i++): ?>
                <li<?php if ($pageId == $i) echo ' class="active"';?>><a href="index.php?page_id=<?=$i;?>"><?=$i;?></a></li>
                <?php endfor; ?>
                <li<?php if ($pageId == $max) echo ' class="disabled"';?>><a href="index.php?page_id=<?=$max;?>"><span>»</span></a></li>
            </ul>
        </nav>
    </div>
<?php }?>

<?php
$host = 'php1.ru';
$user = 'root';
$password = '';
$db_name = 'test_db';
$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");

function addNote($name, $text)
{
    $query = "INSERT INTO notes SET name='$name', text='$text'";
    return $query;
}

$addNoteFlag = false;
$paginationFlag = false;

if (isset($_REQUEST['addNote'])) {
    $name = strip_tags(trim($_REQUEST['name']));
    $text = strip_tags(trim($_REQUEST['text']));
    $query = addNote($name, $text);
    mysqli_query($link, $query) or die(mysqli_error($link));
    $addNoteFlag = true;
}

$query = "SELECT COUNT(*) as count FROM notes";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_fetch_assoc($result);

if ($count > 3) {
    $paginationFlag = true;
    $page_id = $_REQUEST['page_id'];
    if (!$page_id) $page_id = 1;
    $startPosition = 0 + 3*($page_id-1);
    $query = "SELECT * FROM notes ORDER BY date DESC LIMIT $startPosition, 3";
} else {
    $query = "SELECT * FROM notes ORDER BY date DESC";
}

$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Гостевая книга</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
</head>
<body>
<div class="wrapper">
    <h1>Гостевая книга</h1>
    <?php
    if ($paginationFlag) showPagination($count['count']);
    foreach ($data as $item) {
        $date = $item['date'];
        $name = $item['name'];
        $text = $item['text'];
        showNotes($date, $name, $text);
    }
    if ($paginationFlag) showPagination($count['count']);
    if ($addNoteFlag) showAlert();
    showAddForm();
    ?>
</div>
</body>
</html>
