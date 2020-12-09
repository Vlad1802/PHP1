<head>
	<title> Мой первый сайт </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Задача <br>
Введите натуральное число. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза <br>
Ввведите число <br>
<form action="exp2.php" method="post">
Число 1 <input type="number" name="x"><br>
<input type="submit">
</form>

Результат <br>

<?php
$x = $_POST['x'];
$b = $x%2; 
if ($b == 0) {
	$x = $x / 2;
	echo $x;
}
else {
	$x = $x * 3;
	echo $x;
}
?>