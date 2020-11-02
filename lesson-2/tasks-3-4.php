<?php

error_reporting(E_ALL);

function addition($a, $b) {
	echo ($a + $b)."<br>";
	return $a + $b;
}

function subtraction($a, $b) {
	echo ($a - $b)."<br>";
	return $a - $b;
}

function multiplication($a, $b) {
	echo ($a * $b)."<br>";
	return $a * $b;
}

function division($a, $b) {
	echo ($a / $b)."<br>";
	return $a / $b;
}

function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case '+':
			addition($arg1, $arg2);
			break;
		
		case '-':
			subtraction($arg1, $arg2);
			break;

		case '*':
			multiplication($arg1, $arg2);
			break;

		case '/':
			division($arg1, $arg2);
			break;
	}
}

mathOperation(11, 11, '+');
mathOperation(11, 11, "-");
mathOperation(11, 11, "*");
mathOperation(11, 11, "/");