<?php
//<p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.</p>

$first= (string)$_POST['first'];
if(!empty($first)){

	echo reverseString($first);
}else{
	echo "IT is empty";
}
function reverseString($a){
if(is_string($a)){
$a= strrev($a);
return $a;
}else{
	echo "Wrong argument";
}
}