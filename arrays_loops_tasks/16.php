<?php
$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
$string="";
foreach ($arr as  $value) {
	$value.=' ';
	if(($value % 3)==0){
		$value.='</br>';
	}else{
		$value.=", ";
	}
	$string.=$value;

}
echo $string;


