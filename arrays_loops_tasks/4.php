<?php
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
$keys=array_keys($arr);
$values= array_values($arr);
foreach ($keys as  $value) {
	echo '<ul>';
	echo "<li style='list-style-type:none;'>".$value."</li>";
	echo '</ul>';

}
echo '<hr>';
foreach ($values as  $value) {
	echo '<ul>';
	echo "<li style='list-style-type:none;'>".$value."</li>";
	echo '</ul>';
	
}