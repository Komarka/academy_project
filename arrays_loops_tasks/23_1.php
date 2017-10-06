<?php

$value=$_POST['number'];
$value.="";
$sum=0;
$length=strlen($value);
for ($i=0; $i < $length; $i++) { 
	$sum+=$value[$i];
}
echo $sum;


