</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Задача <br>
Введите два числа. Вычислите значение выражения, x2−4y−1−−−−√sin2x+|x|. Перед вычислением проверить корректность значений переменных <br>
Введите номер <br>
<form action="exp8.php" method="post">
Число Х <input type="number" name="x"><br>
Число Y <input type="number" name="y"><br>
<input type="submit">
</form>

Результат <br>

<?php
$x = $_POST['x'];
$y = $_POST['y'];
// нужно проверить что y >=1 
//echo $x;
//echo $y;
if ($y < 1 ) {
	echo "Неверное значение y >=1 <br>";
}
else
 {
//	$c = sin( 2 * $x) + abs($x);
	$c = (pow($x,2)- 4 * sqrt($y-1) / (sin( 2 * $x) + abs($x));
	echo "Результат $c <br>";
}	
?>