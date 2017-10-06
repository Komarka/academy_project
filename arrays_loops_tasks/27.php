<?php
//<p>27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. <br><br>
function makeTable($rows=6,$cols=6){

$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){ 
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){ 
    	$random=rand(1,100);
    	$random_color=rand(0,6);
        echo '<td bgcolor='.$colors[$random_color].'>'. $random .'</td>';
    }
    echo '</tr>';
}

echo '</table>';
}
makeTable();