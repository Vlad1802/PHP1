</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Задача <br>
Решите  уравнение ax2+bx+c=0. <br>
Введите трехзначное число <br>
<form action="exp10.php" method="post">
Число A <input type="number"  name="a"><br>
Число B <input type="number"  name="b"><br>
Число C <input type="number"  name="c"><br>
<input type="submit">
</form>

Результат <br>

<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$D = pow($b,2) - 4 * $a * $c;
if ($D < 0)
{
	echo "Корней нет <br>";
}
elseif ($D == 0)
{
	$x = (-$b - sqrt($D)) / (2 * $a) ;
	echo "Один корень $x <br>";
}
elseif ($D > 0)
{
	$x1 = (-$b - sqrt($D)) / (2 * $a);
	$x2 = (-$b + sqrt($D)) / (2 * $a);
	echo " Два корня <br> $x1 <br> $x2";
	
}

?>