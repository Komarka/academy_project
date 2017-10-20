<?php 
//<p>12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.<br>

$first= (string)$_POST['first'];
if(!empty($first)){

	echo reverseSentences($first);
}else{
	echo "IT is empty";
}
function reverseSentences($a){
	$a=explode('. ', $a);
	$a= array_reverse($a);
	$a=implode('. ', $a);
	return $a;
}