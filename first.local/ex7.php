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
<form action="ex7.php" method="post">
Число 1 <input type="number" name="x"><br>

<input type="submit">
</form>

Результат <br>
Дано число. Увеличьте его на 30%, на 120%. <br>
<?php
$x = $_POST['x'];
$c = $x + $x*0.3;
echo "Увеличения на 30 % $c <br>";
$c = $x + $x*1.2;
echo "Увеличения на 120 % $c <br>";


?>
<br>
