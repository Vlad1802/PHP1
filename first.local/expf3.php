<head>
	<title> Мой первый сайт </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Пользователь выбирает из выпадающего списка страну (Турция, Египет или Италия),
 вводит количество дней для отдыха и указывает, есть ли у него скидка (чекбокс).
 Вывести стоимость отдыха, которая вычисляется как произведение  количества дней на 400.
 Далее это число увеличивается на 10%, если выбран Египет, и на 12%, если выбрана Италия. 
 И далее это число уменьшается на 5%, если указана скидка.<br>
Ввведите Страну <br>
<form action="expf3.php" method="post">
    <select name="country">
        <option value="Turkish">Турция</option>
        <option value="Egypt">Египет</option>
        <option value="Italy">Италия</option>
    </select>
    <input type="submit" name="send" value="Отправить" />
</form>
<form>
 <br>
	Количество дней
	<select name="days">
		<input type="days"  name="x"><br>
	</select> <br>
	Скидка в %
		<select name="discount">
		<input type="discount"  name="y"><br>
	</select>
</form>

Результат <br>
<br>
<?php
$c = echo $_POST['country'];
$x = $_POST['x'];
$y = $_POST['y'];
if ($x > 80)
{
	echo "Здравству уважаемый <br>";
}
else
{
	echo "Успехов";
}
?>