<head>
	<title> Мой первый сайт </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Задача <br>
Введите номер месяца. Вывести название поры года (весна, лето и так далее) или слово 'Ошибка', если месяца с таким номером не существует <br>
Введите номер <br>
<form action="exp7.php" method="post">
Число 1 <input type="number" name="x"><br>
<input type="submit">
</form>

Результат <br>

<?php
$x = $_POST['x'];
echo $x;
if ($x >= 1 && $x <=2  && $x = 12 ) {
	echo "Зима";
}
else
if ($x >=3 && $x <=5) {
	echo "Весна";
}
elseif ($x >=6 && $x <=8) {
	echo "Лето";
}
elseif ($x >=9 && $x <=11) {
	echo "Осень";
}
else {
echo "Ошибка";
}	
?>