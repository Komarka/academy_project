<?php
//<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>
$array=[2, 5, 9, 15, 0, 4];
foreach ($array  as $value) {
	if($value > 3 && $value <10){
		echo "<li style='list-style-type:none;'>".$value."</li>";
	}
}