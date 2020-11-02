<?php

$a = rand(-100, 100);
$b = rand(-100, 100);

echo "\$a = ".$a."<hr>";
echo "\$b = ".$b."<hr>";

if ($a >= 0 && $b >= 0) {
	echo "Разность: ".($a - $b);
} elseif ($a < 0 && $b < 0) {
	echo "Произведение: ".($a * $b);
} else {
	echo "Сумма: ".($a + $b);
}

