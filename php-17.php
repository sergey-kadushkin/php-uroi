<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>17</title>
</head>
<body>
	<h1>Практика на работу с пользовательскими функциями PHP</h1>


	<h3>Задание 1</h3>
		<?php
		function translit($str)
		{
			$rus_alphabet = array(1 => 
				'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й',
				'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
				'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
				'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й',
				'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф',
				'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
			);

			$rus_alphabet_translit = array(1 => 
				'A', 'B', 'V', 'G', 'D', 'E', 'Yo', 'Zh', 'Z', 'I', 'Y',
				'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',
				'H', 'Tc', 'Ch', 'Sh', 'Sch', "`", 'Y', "`", 'E', 'Uy', 'Ya',
				'a', 'b', 'v', 'g', 'd', 'e', 'yo', 'zh', 'z', 'i', 'y',
				'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
				'h', 'tc', 'ch', 'sh', 'sch', "`", 'y', "`", 'e', 'uy', 'ya'
			);

			echo str_replace($rus_alphabet, $rus_alphabet_translit, $str);
		}
		echo translit('Сергей');
		?>

	<h3>Задание 2</h3>
		<?php 
			function apple($num, $str1, $str2, $str3) {
				if (substr($num, -1) == 1) {
					return $num . ' ' . $str1;
				} elseif ((substr($num, -1) >= 5 && substr($num, -1) <= 9) || substr($num, -1) == 0) {
					return $num . ' ' . $str2;
				} elseif (substr($num, -1) >= 2 && substr($num, -1) <= 4) {
				return $num . ' ' . $str3;
				}
			}
			echo apple(121, 'яблоко','яблок', 'яблока');
		?>




</body>
</html>