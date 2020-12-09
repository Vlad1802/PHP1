<!DOCTYPE html>
<html>
<head>
	<title> Мой первый сайт </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href = "style.css" />
</head>
<body>

<h1> Проба пера</h1>
	<?php
	$leftMenu = [
	['link'=>'Домой', 'href'=>'index.php'],
	['link'=>'Задача 1', 'href'=>'ex1.php'],
	['link'=>'Задача 2', 'href'=>'ex2.php'],
	['link'=>'Задача 3', 'href'=>'ex3.php'],
	['link'=>'Задача 4', 'href'=>'ex4.php'],
	['link'=>'Задача 5', 'href'=>'ex5.php'],
	['link'=>'Задача 6', 'href'=>'ex6.php'],
	['link'=>'Задача 7', 'href'=>'ex7.php'],
	['link'=>'Задача 8', 'href'=>'ex8.php'],
	['link'=>'Задача 9', 'href'=>'ex9.php'],
	['link'=>'Задача 10', 'href'=>'ex10.php'],
	['link'=>'Задача 11', 'href'=>'ex11.php'],
	];
	?>
	<?php
	$leftMenu2 = [
	['link'=>'Задача 1', 'href'=>'exp1.php'],
	['link'=>'Задача 2', 'href'=>'exp2.php'],
	['link'=>'Задача 3', 'href'=>'exp3.php'],
	['link'=>'Задача 4', 'href'=>'exp4.php'],
	['link'=>'Задача 5', 'href'=>'exp5.php'],
	['link'=>'Задача 6', 'href'=>'exp6.php'],
	['link'=>'Задача 7', 'href'=>'exp7.php'],
	['link'=>'Задача 8', 'href'=>'exp8.php'],
	['link'=>'Задача 9', 'href'=>'exp9.php'],
	['link'=>'Задача 10', 'href'=>'exp10.php'],
	['link'=>'Задача 11', 'href'=>'exp11.php'],
	];
	?>
		<?php
	$leftMenu3 = [
	['link'=>'Задача 1', 'href'=>'expf1.php'],
	['link'=>'Задача 2', 'href'=>'expf2.php'],
	['link'=>'Задача 3', 'href'=>'expf3.php'],
	['link'=>'Задача 4', 'href'=>'expf4.php'],
	['link'=>'Задача 5', 'href'=>'expf5.php'],
	['link'=>'Задача 6', 'href'=>'expf6.php'],
	];
	?>
	<div>
	<div id="nav">
	<h2>Навигация по сайту</h2>
	<h2>Простейшая арифметика</h2>
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
		<li><a href='<?= $leftMenu[6]['href']?>'><?= $leftMenu[6]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu[7]['href']?>'><?= $leftMenu[7]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu[8]['href']?>'><?= $leftMenu[8]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu[9]['href']?>'><?= $leftMenu[9]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu[10]['href']?>'><?= $leftMenu[10]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu[11]['href']?>'><?= $leftMenu[11]['link']?></a>
		</li>
	</ul>
	<ul>
	<h2>Условный оператор</h2>
		<li><a href='<?= $leftMenu2[0]['href']?>'><?= $leftMenu2[0]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu2[1]['href']?>'><?= $leftMenu2[1]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu2[2]['href']?>'><?= $leftMenu2[2]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu2[3]['href']?>'><?= $leftMenu2[3]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu2[4]['href']?>'><?= $leftMenu2[4]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu2[5]['href']?>'><?= $leftMenu2[5]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu2[6]['href']?>'><?= $leftMenu2[6]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu2[7]['href']?>'><?= $leftMenu2[7]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu2[8]['href']?>'><?= $leftMenu2[8]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu2[9]['href']?>'><?= $leftMenu2[9]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu2[10]['href']?>'><?= $leftMenu2[10]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu2[11]['href']?>'><?= $leftMenu2[11]['link']?></a>
	</ul>
<ul>
	<h2>Работа с формами</h2>
		<li><a href='<?= $leftMenu3[0]['href']?>'><?= $leftMenu3[0]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu3[1]['href']?>'><?= $leftMenu3[1]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu3[2]['href']?>'><?= $leftMenu3[2]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu3[3]['href']?>'><?= $leftMenu3[3]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu3[4]['href']?>'><?= $leftMenu3[4]['link']?></a>
		</li>
		<li><a href='<?= $leftMenu3[5]['href']?>'><?= $leftMenu3[5]['link']?></a>
		</li>

	</ul>
</body>
</html>