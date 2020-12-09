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
<form action="ex9.php" method="post">
Число 1 <input type="number" min="99" max="999" name="x"><br>

<input type="submit">
</form>

Результат <br>
Дано трехзначное числа. Найдите сумму его цифр <br>
<?php
$x = $_POST['x'];
$c = $x{0} + $x{1} + $x{2};
echo "Сумма цифр  $c <br>";


?>
<br>
