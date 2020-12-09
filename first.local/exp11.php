</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Задача <br>
Вычислите значение выражения max2(x,y,z)−3x⋅min(x,y,z)sin1+max(x,y−z)/min(y,z). Если вычисление невозможно, то сообщите об этом пользователю. <br>
Введите трехзначное число <br>
<form action="exp11.php" method="post">
Число X <input type="number"  name="x"><br>
Число Y <input type="number"  name="y"><br>
Число Z <input type="number"  name="z"><br>
<input type="submit">
</form>

Результат <br>

<?php
$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];
//$r = str_split($x,$y,$z);
$c = ( pow(max($x,$y,$z),2) - pow (3, $x) * min ($x,$y,$z) ) / (sin(1) + ( max ($x,$$z) / min ( $y,$z)));
//$c = max($x,$y,$z);
echo "Результат $c <br>";


?>