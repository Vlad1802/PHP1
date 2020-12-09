<html>
<head>
	<title> Мой первый сайт </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Ввведите числа <br>
<form action="ex6.php" method="post">
Число 1 <input type="number" name="x"><br>

<input type="submit">
</form>

Результат <br>
Дано натуральное числа. Найдите остатки от деления этих чисел на 3 и на 5. <br>
<?php
$x = $_POST['x'];
$c = $x%3;
echo "Остаток от деления на 3 $c <br>";
$c = $x%5;
echo "Остаток от деления на 5 $c <br>";


?>
<br>
