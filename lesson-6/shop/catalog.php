<?php 
include "blocks/header.php";
include "config.php";

$sql = "select * from goods";
$res = mysqli_query($connect, $sql);
?>
<link rel="stylesheet" type="text/css" href="style.css">
<h1>Каталог</h1>
<div class="goods">
	<?php while($data = mysqli_fetch_assoc($res)): ?>
		<div class="good"> 
			<span class="good-left">
				<?php 
					$sql = "select * from goods where id={$data['id']}";
					
					$result = mysqli_query($connect, $sql);
					$catalogItem = mysqli_fetch_assoc($result);
					// print_r($catalogItem);
				?>
				<a href="catalog-item.php?id=<?=$catalogItem['id']?>"><h3><?= $data['name'] ?></h3></a>
				<a href="catalog-item.php?id=<?=$catalogItem['id']?>">
					<img class="good-small-img" src="<?= $data['small_img'] ?>"> 
				</a>
				
			</span>
			
			<span class="good-right">
				<span><?= $data['short_desc'] ?></span>
				<span><?= $data['price'] ?> &#x20bd</span>
				<a class="buy-btn" href="#">Купить</a>
			</span>
			
		</div>
	<?php endwhile; ?>
</div>