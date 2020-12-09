<?php
$size = ini_get("post_max_size");
$letter = $size{strlen($size)-1};
$size = (int)$size;
switch(strtoupper($letter)):
	case 'G': $size = $size * 1024;
	case 'M': $size = $size * 1024;
	case 'K': $size = $size * 1024;
endswitch;
?>
<!DOCTYPE html>
<html>

<head>
	<title>Контакты</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="style.css"
	/>
</head>
	