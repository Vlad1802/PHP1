<head>
	<title> Мой первый сайт </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Ввведите числа <br>
<form action="exp1.php" method="post">
Число 1 <input type="number" name="x"><br>
<input type="submit">
</form>

Результат <br>
Дано число. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30 <br>
<?php
$x = $_POST['x'];
if ($x > 10) {
	$x = $x + 100;
	echo $x;
}
else {
	$x = $x - 30;
	echo $x;
}
?>