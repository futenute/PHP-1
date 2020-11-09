<!DOCTYPE html>
<html>
<head>
	<title>Галерея</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		$files = scandir("img");
	 ?>
	<h1>Галерея</h1>
	<br>
	<div class="gallery">
		<?php for ($i = 2; $i < count($files); $i++){?>
			<a href="full_image.php?img=<?= $files[$i] ?>">
				<img width="200" src="img/<?= $files[$i] ?>">
			</a>
		<?php } ?>
	</div>
</body>
</html>