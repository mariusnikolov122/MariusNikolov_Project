<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Example</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color: powderblue">
	<h1 style="text-align: center;">Example</h1>
	<h2>Let's start with this characters:</h2>
</body>
</html>


<?php

//Дефинирам масив и го пълна с елементи

$array = [
"abc",
"def",
"ghi",];

foreach ($array as $value) {
		echo $value . "," . "<br>";
	}

	echo "<br>";

	?>

	<form action="script.php" method="post">
		<input type="submit" name="submit" value="Check">
	</form>

	<br>
	<a href="index.php">Back</a>