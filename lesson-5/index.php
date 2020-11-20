<!DOCTYPE html>
<html>
<head>
	<title>Галерея</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Галерея</h1>
	<?php
		include "config.php";
		$sql = "select * from img order by count desc";
		$res = mysqli_query($connect, $sql);
	?>

	<div class="gallery">
		<?php while ($data = mysqli_fetch_assoc($res)):?>
			<a href="full_image.php?id=<?= $data['id']?>">
				<img width="200" src="<?= $data['path'].$data['name'] ?>">
			</a>
		<?php endwhile; ?>
	</div>
</body>
</html>
