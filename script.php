<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Final Result</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<body style="background-color: powderblue;">
		<h1 style="text-align: center;">Final Result</h1>
	</body>
</body>
</html>


<?php

//Дефинирам масив и го пълна с елементи

$stringArray = ["abc",
"def",
"ghi",];

//С функцията count преброявам елементите в масива

$arr_count = count($stringArray) - 1;

//Резултата го приравнявам на 0, защото ако няма елементи в масива няма да се изпълнява и кода, тоест 0 = празен масив

//С функцията substr връщам част от стринг, тоест тук минаваме през всички стрингове

for ($i=0; $i < $arr_count ; $i++) { 
	$first = substr($stringArray[$i+1], 0, 1);
	$last = subst($stringArray[$i], -1);

	if (($i + 2) <= $arr_count) {
		$next_first = substr($stringArray[$i + 2], 0, 1);
		$next_first = substr($stringArray[$i + 1], -1);
	}

//Започвам да сравнявам стринговете или по-точно буквите на стринговете. Използвам функцията substr_replace, за да заменя част от един стринг с друг стринг. С функцията strlen проверявам дължината на дадения стринг

if ($first != $last && $next_first == $next_last) {
 	$stringArray[$i + 1] = substr_replace($stringArray[$i + 1], $last, 0, 1);
 	$result++;
} elseif ($first != $last && $next_last == $next_first) {
	if (strlen($stringArray[$i + 1]) == 1) {
		$stringArray[$i] = substr_replace($stringArray[$i], $next_last, -1);
	} elseif (strlen($stringArray[$i + 1]) >= 2) {
		$stringArray[$i + 1] = substr_replace($stringArray, $last, 0, 1)
		}
	$result++;
	}	 
}

echo "<h2>The minimum amount of character changes is: " . $result . "</h2>";

foreach ($stringArray as $value) {
	echo $value . "," . "<br>";
}

echo "<br>";