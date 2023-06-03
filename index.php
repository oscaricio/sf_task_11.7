<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SF. Модуль 11. Практическое задание 11.7</title>
	<link rel="stylesheet" href="style.css?<?=filemtime('style.css')?>">
</head>
<body>
<div class="container">
	<h1>SF. Модуль 11. Практическое задание 11.7</h1>
	<h2>Задание 1</h2>
	<table>
		<tr>
			<th>A</th>
			<th>B</th>
			<th>!A</th>
			<th>A || B</th>
			<th>A && B</th>
			<th>A xor B</th>
		</tr>
		<tr>
			<td><?=$A=0;?></td>
			<td><?=$B=0;?></td>
			<td><?php var_export(!$A);?></td>
			<td><?php var_export($A || $B);?></td>
			<td><?php var_export($A && $B);?></td>
			<td><?php var_export($A xor $B);?></td>
		</tr>
		<tr>
			<td><?=$A?></td>
			<td><?=$B=1?></td>
			<td><?php var_export(!$A);?></td>
			<td><?php var_export($A || $B);?></td>
			<td><?php var_export($A && $B);?></td>
			<td><?php var_export($A xor $B);?></td>
		</tr>
		<tr>
			<td><?=$A=1?></td>
			<td><?=$B=0?></td>
			<td><?php var_export(!$A);?></td>
			<td><?php var_export($A || $B);?></td>
			<td><?php var_export($A && $B);?></td>
			<td><?php var_export($A xor $B);?></td>
		</tr>
		<tr>
			<td><?=$A?></td>
			<td><?=$B=1?></td>
			<td><?php var_export(!$A);?></td>
			<td><?php var_export($A || $B);?></td>
			<td><?php var_export($A && $B);?></td>
			<td><?php var_export($A xor $B);?></td>
		</tr>
	</table>
	<h2>Задание 2</h2>
	<?php
	$headers = ["true", "false", "1", "0", "-1", "\"1\"", "null", "\"php\""];
	$X = $Y = [true, false, 1, 0, -1, "1", null, "php"];
	?>
	<h3>Гибкое сравнение в PHP</h3>
	<table class="v2">
		<tr>
			<th>==</th>
			<?php foreach ($headers as $header):?>
				<th><?=$header;?></th>
			<?php endforeach;?>
		</tr>
		<?php foreach ($Y as $j => $valY):?>
		<tr>
			<td><?=$headers[$j];?></td>
			<?php foreach ($X as $i => $valX):?>
				<td><?php var_export($valY == $valX);?></td>
			<?php endforeach;?>
		</tr>
		<?php endforeach;?>
	</table>
	<h3>Жёсткое сравнение в PHP</h3>
	<table class="v2">
		<tr>
			<th>===</th>
			<?php foreach ($headers as $header):?>
				<th><?=$header;?></th>
			<?php endforeach;?>
		</tr>
		<?php foreach ($Y as $j => $valY):?>
			<tr>
				<td><?=$headers[$j];?></td>
				<?php foreach ($X as $i => $valX):?>
					<td><?php var_export($valY === $valX);?></td>
				<?php endforeach;?>
			</tr>
		<?php endforeach;?>
	</table>
	<h2>Выводы о сравнении в PHP</h2>
	<ol>
		<li>При нестрогом сравнении оператор осуществляет приведение между двумя различными типами, если они
			различаются. То есть он сравнивает значение после преобразования типов. Таким образом мы можем получить
			результат отличный от ожидаемого.
		</li>
		<li>При строгом сравнении оператор вернет <i>true</i>, только если оба операнда имеют одинаковый тип и одно и то же значение</li>
		<li>
			<span>Используя в своем коде различные операторы сравнения, лучше пользоваться операторами со строгим сравнением.
			Также нужно учитывать особенности нестрогого сравнения во избежание неожиданных ошибок и различия сравнения в <i>PHP 7</i> и <i>PHP 8</i>.</span>
			<ul>
				<li>В PHP 7 при нестрогом сравнении строки с числом, строка приводится к числу (int) и это даёт 0, даже если строка пустая</li>
				<li>В PHP 8 при нестрогом сравнении строки с числом, сравниваются как числа, только если строка представляет собой число.
					Иначе число будет конвертировано в строку, и будет производиться строковое сравнение</li>
			</ul>
		</li>
	</ol>
</div>
</body>
</html>