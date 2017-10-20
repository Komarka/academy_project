<?php
//<p>2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p>
$first= (string)$_POST['first'];
if(!empty($first)){

	var_dump(topLongestWords($first));
}else{
	echo "IT is empty";
}
function topLongestWords($a){
	if(is_string($a)){
		$a=explode(' ', $a);
 usort($a, "sort_func");
$a = array_slice($a, 0, 3);
return $a;

	}
}
function sort_func($a,$b){
 
 if (strlen($a) == strlen($b)){
       return 0;
 }
 
    return (strlen($a) < strlen( $b)) ? 1 : -1;
}