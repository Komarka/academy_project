<?php
$array=[26, 17, 136, 12, 79, 15];
$current=0;
$sum=array();
foreach ($array as $value) {
	$current=$value;
	$result=$current * $value;
	array_push($sum, $result);
}
foreach ($sum as $value) {
	$result_2+=$value;

}
echo $result_2;

