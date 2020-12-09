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
<form action="ex8.php" method="post">
Число 1 <input type="number" name="x"><br>
Число 2 <input type="number" name="y"><br>

<input type="submit">
</form>

Результат <br>
Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа <br>
<?php
$x = $_POST['x'];
$y = $_POST['y'];
$c = $x*0.4 + $y*0.84;
echo "Сумма чисел $c <br>";



?>
<br>
