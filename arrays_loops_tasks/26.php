<?php
//<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.</p>
$result=[];
  for($i = 0; $i < 10; $i++)
        $a[] = rand(1, 100);
    
    
     $index_parniy = 0;
     $index_neparniy = 0;
 
    for($i = 0; $i < 10; $i++) {    
        if( $a[$i]  > 0 &&  ($i%2)==0) {
             $index_parniy=$i;
         
        }
 
        if(  $a[$i]  > 0 &&  ($i%2)!=0) {
            $index_neparniy=$i;
            $result[$index_neparniy]=$a[$i];
           
        }
    }
    var_dump($result);
 
    
 
    
