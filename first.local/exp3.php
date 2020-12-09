<head>
	<title> Мой первый сайт </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Задача <br>
Введите число. Если оно не меньше 50, то выведите квадрат этого числа, если же это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите слово "Ошибка" <br>
Ввведите число <br>
<form action="exp3.php" method="post">
Число 1 <input type="number" name="x"><br>
<input type="submit">
</form>

Результат <br>

<?php
$x = $_POST['x'];
if ($x > 50) {
	$x = pow($x, 2);
	echo $x;
}
elseif (10 < $x &&  $x < 30) {
	$x = 0;
	echo $x;
}
else {
echo "Ошибка";	
}	
?>