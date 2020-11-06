<?php

// Функция транслитерации
function transliteration($string) { 

	$letters = [
		"а" => "a",
		"б" => "b",
		"в" => "v",
		"г" => "g",
		"д" => "d",
		"е" => "e",
		"ё" => "yo",
		"ж" => "zh",
		"з" => "z",
		"и" => "i",
		"й" => "j",
		"к" => "k",
		"л" => "l",
		"м" => "m",
		"н" => "n",
		"о" => "o",
		"п" => "p",
		"р" => "r",
		"с" => "s",
		"т" => "t",
		"у" => "u",
		"ф" => "f",
		"х" => "kh",
		"ц" => "ts",
		"ч" => "ch",
		"ш" => "sh",
		"щ" => "sch",
		"ъ" => "'",
		"ы" => "y",
		"ь" => "'",
		"э" => "e",
		"ю" => "yu",
		"я" => "ya"
	];

	for($i = 0; $i < mb_strlen($string); $i++) {
		if(isset($letters[mb_substr($string, $i, 1)])) {
			$translitString .= $letters[mb_substr($string, $i, 1)];
		} else {
			$translitString .= " ";
		}
	}

	return $translitString;
}

// Функция, заменяющая пробелы на подчеркивания
function underscore($string) { 
	$strArr = explode(" ", $string);
	$underscoredStr = implode("_", $strArr);
	return $underscoredStr;
}

// Функция из задания 9, объединяющая две ранее написанные функции
function transliterationAndUnderscore($string) {
	$translitStr = transliteration($string);
	return underscore($translitStr);
}

echo transliterationAndUnderscore("соня чернова");