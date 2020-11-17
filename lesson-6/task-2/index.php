<?php

function mathOperation($num1, $num2, $operation) {
	switch ($operation) {
		case '+':
			return $num1 + $num2;
		
		case '-':
			return $num1 - $num2;

		case '*':
			return $num1 * $num2;

		case '/':
			if ($num2 == 0) {
				return "На ноль делить нельзя";
			} else {
				return $num1 / $num2;
			}	
	}
}

$result = mathOperation((float)$_GET['num1'], (float)$_GET['num2'],  $_GET['operation']);
	
?>

<form>
	<input type="number" name="num1" value="<?= $_GET['num1'] ?>" placeholder="Первое число">
	<input type="number" name="num2" value="<?= $_GET['num2'] ?>" placeholder="Второе число"><br><br>
	<input type="submit" name="operation" value="+">
	<input type="submit" name="operation" value="-">
	<input type="submit" name="operation" value="*">
	<input type="submit" name="operation" value="/">
	<?php 
		if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])):

	?>
	<h2>Результат: <?= $result ?></h2>
	<a href="<?= $_SERVER['HTTP_REFERER'] ?>">Назад</a>
	<?php endif; ?>

</form>