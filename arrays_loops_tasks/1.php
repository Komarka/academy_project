<?php
$array=['html','css','js', 'jq'];
$length=count($array);
for ($i=0; $i <$length ; $i++) { 
	$el=$array[$i];
	echo "<li style='list-style-type:none;'>".$el."</li>";
}
