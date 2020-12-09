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
<form action="ex1.php" method="post">
Число 1 <input type="number" name="x"><br>
Число 2 <input type="number" name="y"><br>
<input type="submit">
</form>

Результат <br>
Сложения <br>
<?php
$a = $_POST['x'];
$b = $_POST['y'];
$c = $a + $b;
echo $c;

?>
<br>
Умножения <br>
<?php
$a = $_POST['x'];
$b = $_POST['y'];
$c = $a * $b;
echo $c;
?>

</body>
</html>