<?php
$first= (string)$_POST['first'];
$second=(string)$_POST['second'];

if(!empty($first) && !empty($second)){
	var_dump(getCommonWords($first, $second));
}else{
	echo 'One of the textareas is empty';
}
function getCommonWords($a,$b){
	
	if($a && $b){
		$a=explode(' ', $a);
		$b=explode(' ', $b);
		return array_intersect($a, $b);
	}

}


?>