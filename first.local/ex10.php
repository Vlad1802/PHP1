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
<form action="ex10.php" method="post">
Число 1 <input type="number" min="99" max="999" name="x"><br>

<input type="submit">
</form>

Результат <br>
Дано трехзначное числа. Поменяйте среднюю цифру на ноль. <br>
<?php
$x = $_POST['x'];
$serch = $x{2};
$replace = 0;
//$c = $x{0}"0"$x{2};
echo "Трехзначное число с замененной цифрой $c <br>";
echo $x{0},"0",$x{2};



?>
<br>
