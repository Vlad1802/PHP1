<head>
	<title> Мой первый сайт </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Задача <br>
Введите  два числа. Дано два числа. Вывести наибольшее из них <br>
Ввведите числа <br>
<form action="exp4.php" method="post">
Число 1 <input type="number" name="x"><br>
Число 2 <input type="number" name="y"><br>
<input type="submit">
</form>

Результат <br>

<?php
$x = $_POST['x'];
$y = $_POST['y'];
if ($x > $y) {
	echo $x;
}
elseif ($y > $x) {
	echo $y;
}
	
?>