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
<form action="ex4.php" method="post">
Число 1 <input type="number" name="x"><br>
Число 2 <input type="number" name="y"><br>
Число 3 <input type="number" name="z"><br>
<input type="submit">
</form>

Результат <br>
(x+1)^4−2(z−2x^2+y^2)+siny <br>
<?php
$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['y'];
$x = (int)$x;
$y = (int)$y;
$z = (int)$z;
$c = pow($x+4, 4)-2 *(z - 2 * pow($x, 2) + pow ($y, 2))+ sin ( sqrt ($y));
echo $c;

?>
<br>
