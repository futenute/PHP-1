<link rel="stylesheet" type="text/css" href="style.css">
<h1>Исходное изображение</h1>
<?php 
	include "config.php";
	$img = "select * from img where id = {$_GET['id']}";
	$resImg = mysqli_query($connect, $img);
	$updateCount = "update img set count=count+1 where id={$_GET['id']}";
	$count = mysqli_query($connect, $updateCount);
	$data = mysqli_fetch_assoc($resImg);
?>



<img src="<?= $data['path'].$data['name'] ?>"><br>
<p>Просмотров: <?= $data['count'] ?></p>
<a href="<?= $_SERVER['HTTP_REFERER'] ?>">Назад</a>