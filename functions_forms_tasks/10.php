<?php

//<p>10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.</p>
$first= (string)$_POST['first'];
if(!empty($first)){

	echo uniqueWords($first);
}else{
	echo "IT is empty";
}
function uniqueWords($a){
	$a=explode(' ', $a);
	$a=sizeof(array_unique($a));
	return $a;
}
