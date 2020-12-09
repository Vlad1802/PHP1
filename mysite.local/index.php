<?php
	setlocale(LC_ALL, "russian");
	$day = strftime('%d');
	$mon = strftime('%m');
	$mon = iconv("windows-1251", "UTF-8", $mon);
	$year = strftime('%Y');
	$hour = (int)strftime('$H');
	$welcome = "Доброй ночи";
	if ($hour>6 and $hour<12)
	{		
	$welcome = "Доброе утро";
	}
	else if ($hour>12 and $hour<18)
	{
	$welcome = "Добрый день";
	}
	else if ($hour>18 and $hour<23)
	{
		$welcome = "Доброй ночи";
	}
	$daytime = "";
	switch ($d % 7):
		case 0:
			echo $daytime = "Понедельник"; break;
		case 1:
			echo $daytime = "Вторник"; break;
		case 2:
			echo $daytime = "Среда"; break;
		case 3:
			echo $daytime = "Четверг"; break;
		case 4:
			echo $daytime = "Пятница"; break;
		case 5:
			echo $daytime = "Суббота"; break;
		case 6:
			echo $daytime = "Воскресенье"; break;
	Endswitch;
?>
<!DOCTYPE html>
<html>
<head>
	<title> Сайт нашей школы </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<body>

	<div id="header">
		<span class="slogan">приходите к нам учиться</span>
	</div>
	<?php
	$leftMenu = [
	['link'=>'Домой', 'href'=>'index.php'],
	['link'=>'О нас', 'href'=>'about.php'],
	['link'=>'Контакты', 'href'=>'contact.php'],
	['link'=>'Таблица умножения', 'href'=>'table.php'],
	['link'=>'Калькулятор', 'href'=>'calc.php'],
	['link'=>'Тест', 'href'=>'test.php'],
	];
	?>
	<div>
	<div id="nav">
	<h2>Навигация по сайту</h2>
	<ul>
		<li><a href='<?= $leftMenu[0]['href']?>'><?= $leftMenu[0]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu[1]['href']?>'><?= $leftMenu[1]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu[2]['href']?>'><?= $leftMenu[2]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu[3]['href']?>'><?= $leftMenu[3]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu[4]['href']?>'><?= $leftMenu[4]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu[5]['href']?>'><?= $leftMenu[5]['link']?></a>
		</li>
	</ul>
	
	<div id="content">
		<h1> <?=$welcome?>, Гость!</h1>
		<h2> Сегодня <?=$daytime?> </h2>
		<h3>Зачем мы ходим в школу?</h3>
	<blockqoute> 
	<?php echo "Сегодня $day число $mon месяца $year года ";
	$shop = "open"; $money = true;
	if($shop == "open" and $money)
	{
		echo "Иду в магазин";
		echo "\n Покупаю хлеб2"; 
	}
		echo "\n Иду домой";
	?>
	</blockqoute>
<p>
	<?php

$user = ["name"=>"John", "login"=>"root", "password"=>"1234"];
//echo $user[0];
$user["age"] = 25;
$user[4] = true;
var_dump($user);

?>
</p>

</body>
</html>