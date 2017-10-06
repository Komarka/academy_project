<?php
//<p>24. Вам нужно разработать программу, которая считала бы количество вхожденийкакой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.</p>
function amount($target,$target_raw){
	$count=0;
if (is_array($target_raw)) {
	foreach ($target_raw as $value) {
		if ($value==$target) {
			$count++;
		}
	}
}else if (is_string($target_raw)) {
	$length=strlen($target_raw);
	for ($i=0; $i <$length ; $i++) { 
		$current=$target_raw[$i];
		if($target==$current){
			$count++;
		}
	}
}
else if(is_numeric($target_raw)){
	$target_raw=(string)$target_raw;
	return amount($target,$target_raw);
}else{
	die('Неопознанный вид');
}
echo $count;
}


amount(4,44444);