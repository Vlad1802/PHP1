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
<form action="ex5.php" method="post">
Число 1 <input type="number" name="x"><br>
Число 2 <input type="number" name="y"><br>
Число 3 <input type="number" name="z"><br>
<input type="submit">
</form>

Результат <br>
Даны три ненулевых числа. Найдите всевозможные результаты деления суммы двух из них на оставшееся третье число <br>
<?php
$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];
$c = ($x+$y)/$z;
echo "$c <br>";
$c = ($x+$z)/$y;
echo "$c <br>";
$c = ($y+$z)/$x;
echo "$c <br>";

?>
<br>
