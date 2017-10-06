<?php
$days=["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
foreach ($days as  $value) {
	if($value == 'Monday'){
		echo "<li style='list-style-type:none;'><b>".$value."</b></li>";
	}else{
	echo "<li style='list-style-type:none;'>".$value."</li>";
}
}