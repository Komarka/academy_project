<?php
//13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';<br><br> Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите  в виде списка в порядке уменьшения количества:<br><br>
$first= (string)$_POST['first'];
if(!empty($first)){

$first=explode(' ', $first);
$first=array_count_values($first);
array_multisort($first,SORT_DESC);
foreach ($first as $key => $value) {
	echo "<li>The element is ".$key." repeat ".$value." times</li>";
}
}else{
	echo "IT is empty";
}
