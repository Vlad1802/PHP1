<head>
	<title> Мой первый сайт </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Пользователь вводит свой возраст. Если он больше 80 лет, то вывести 'Здравствуйте, уважаемый', иначе 'Успехов!'.<br>
Ввведите Возраст <br>
<form action="expf2.php" method="post">
День недели <input type="number" min "1" max "7" name="x"><br>
<input type="submit">
</form>

Результат <br>
<br>
<?php
$x = $_POST['x'];
if ($x > 80)
{
	echo "Здравству уважаемый <br>";
}
else
{
	echo "Успехов";
}
?>