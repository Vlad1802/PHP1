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
<form action="ex3.php" method="post">
Число 1 <input type="number" name="x"><br>
Число 2 <input type="number" name="y"><br>
Число 3 <input type="number" name="z"><br>
<input type="submit">
</form>

Результат <br>
Среднее арифметическое <br>
<?php
//if (count($_POST)=0)
//{
//break;	
//}	
$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['y'];
$c = ($x+$y+$z)/count($_POST);
echo $c;

?>
<br>
