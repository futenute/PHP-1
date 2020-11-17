<?php

$options = ["+", "-", "*", "/"];

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

$result = mathOperation($_GET['num1'], $_GET['num2'],  $_GET['operation']);
	
?>

<form>
	<p>Первое число</p>
	<input type="number" name="num1" value="<?= $_GET['num1'] ?>"><br><br>
	<span>Операция</span>

	<select name="operation">
		<?php for($i=0; $i < count($options); $i++): ?>
			<option <?php if ($options[$i] == $_GET['operation']): ?> selected="selected" <?php endif; ?> >
				<?= $options[$i] ?>
			</option>
		<?php endfor; ?>
	</select>

	<p>Второе число</p>
	<input type="number" name="num2" value="<?= $_GET['num2'] ?>"><br><br>
	<span>Вычислить</span>
	<input type="submit" value="=">
	<?php 
		if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])):

	?>
	<h2>Результат: <?= $result ?></h2>
	<a href="<?= $_SERVER['HTTP_REFERER'] ?>">Назад</a>
	<?php endif; ?>

</form>