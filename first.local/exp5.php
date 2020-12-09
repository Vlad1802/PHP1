<head>
	<title> Мой первый сайт </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Задача <br>
Введите два числа. Вывести 'Да', если они отличаются на 100, иначе вывести 'Нет' <br>
Ввведите числа <br>
<form action="exp5.php" method="post">
Число 1 <input type="number" name="x"><br>
Число 2 <input type="number" name="y"><br>
<input type="submit">
</form>

Результат <br>

<?php
$x = $_POST['x'];
$y = $_POST['y'];
$z = $x - $y;
if ($z > 100 || $z < -100) {
	echo "Да";
}
else {
	echo "Нет";
}
	
?>