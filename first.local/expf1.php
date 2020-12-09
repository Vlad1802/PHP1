<head>
	<title> Мой первый сайт </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Пользователь вводит номер дня недели. Вывести название дня недели<br>
Ввведите числа <br>
<form action="expf1.php" method="post">
День недели <input type="number" min "1" max "7" name="x"><br>
<input type="submit">
</form>

Результат <br>
<br>
<?php
$x = $_POST['x'];
$c = array ( 1 => "Понедельник" , 2 => "Вториник" ,3 => "Среда" ,4 => "Четверг" ,5 => "Пятница" ,6 => "Суббота" ,7 => "Воскресенье" );
echo $c[$x] ;
?>