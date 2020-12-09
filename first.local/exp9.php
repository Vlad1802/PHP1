</head>
<li><a href = "index.php" ?> Домой</a>
</li>



<body>
Задача <br>
В данном трехзначном числе переставьте цифры так, чтобы новое число оказалось наибольшим из возможных <br>
Введите трехзначное число <br>
<form action="exp9.php" method="post">
Число 1 <input type="number" max="999" min="99" name="x"><br>
<input type="submit">
</form>

Результат <br>

<?php
$x = $_POST['x'];
$r = str_split($x);
arsort($r);
echo 'Максимальное число из возможных: '.implode("", $r);



?>