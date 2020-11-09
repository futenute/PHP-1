<!DOCTYPE html>
<html>
<head>
	<title>Галерея</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Add jQuery library -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="vendor/fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
	<script type="text/javascript" src="vendor/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
	</script>

</head>
<body>
	<?php 
		$files = scandir("img");
	 ?>
	<h1>Галерея</h1>
	<br>
	<div class="gallery">
		<?php for ($i = 2; $i < count($files); $i++){?>
			<a class="fancybox" rel="group" href="img/<?= $files[$i] ?>">
				<img width="200" src="img/<?= $files[$i] ?>">
			</a>
		<?php } ?>
	</div>
</body>
</html>