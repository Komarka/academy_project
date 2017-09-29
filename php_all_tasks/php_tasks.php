<?php
//1
$name="Illya";
echo "<hr>";
//2
$age= 21;
echo "<hr>";
//3
echo 'my name is '.$name;
echo '</br>';
echo "<hr>";
//4
echo 'I am '.$age.' years old';
echo '</br>';
echo "<hr>";
//5-8
if($age >= 18 && $age <= 59){
echo 'Вам еще работать и работать';
echo '</br>';
}else if($age >59){
echo 'Вам пора на пенсию';
echo '</br>';
}else if ($age <=17 && $age > 0){
echo 'Вам еще рано работать';
echo '</br>';
}else if($age<=0 || !is_numeric($age)){
echo 'Неизвестный возраст';
}
echo "<hr>";
//9-12
$day= 4;
switch ($day) {
case $day >= 1 && $day <= 5:
echo "Это рабочий день";
break;
case $day >= 6 && $day <= 7:
echo "Это выходной день";
break;
case $day <= 0: 
echo "Это отрицательное число";
break;
 default:
echo "Неизвестный день";
break;
}
echo "</br>";
echo "<hr>";
//13
$s=250;
$t=5;
$v=$s/$t;
echo $v;
echo '</br>';
echo "<hr>";
//14
$foo='bar';
$bar=10;
echo $$foo;
echo '</br>';
echo "<hr>";
//15
function calculator($a,$b,$operator){
if($operator=='/' && $a=='0' || $b=='0'){
die("Делить на ноль нельзя") ;
}
switch ($operator) {
case '+':
echo $a + $b;
break;
case '-':
echo $a - $b;
break;
case '/':
echo $a / $b;
break;
case '*':
echo $a * $b;
break;
case '%':
echo $a % $b;
break;
}
}
calculator(7,7,'/');
echo "<hr>";
//16
echo '</br>';
$a=5;
$b=8;
echo $a>$b ? $a : $b;
echo "<hr>";
//17
echo '</br>';
$a='78';
$b=78;
if($a==$b){
echo "They are equal";
}else{
echo "They are not";
}
echo "<hr>";
//18
echo '</br>';
$a='78';
$b=78;
if($a===$b){
echo "They are equal";
}else{
echo "They are not equal";
}
echo "<hr>";
//19
echo '</br>';
$a='78';
$b=78;
var_dump($a==$b);
echo "<hr>";
//20
 echo '</br>';
 $foo = 10; // $foo - это целое число
$bar = (boolean) $foo;//При преобразовании в логический тип, следующие значения рассматриваются как FALSE:Сам булев FALSE,целое 0 (ноль),число с плавающей точкой 0.0 (ноль),пустая строка и строка "0",массив с нулевыми элементами,объект с нулевыми переменными-членами,специальный тип NULL (включая неустановленные переменные),Все остальные значения рассматриваются как TRUE (включая любой ресурс).
echo $bar;
echo "</br>";
echo "<hr>";
//21 При преобразовании в логический тип, следующие значения рассматриваются как FALSE:Сам булев FALSE,целое 0 (ноль),число с плавающей точкой 0.0 (ноль),пустая строка и строка "0",массив с нулевыми элементами,объект с нулевыми переменными-членами,специальный тип NULL (включая неустановленные переменные),Все остальные значения рассматриваются как TRUE (включая любой ресурс).
$var=0;
$check=(boolean) $var;
echo $check;
echo "</br>";
echo "<hr>";
//22 -20 считается TRUE, как и любое ненулевое (отрицательное или положительное) число! 
$a=-20;
$b=(boolean)$a;
echo $b;
echo "</br>";
echo "<hr>";
//23
$a='I m the first |';
$b='I m the second |';
$c=' I m the third |';
echo $a;
print_r($c);
print($b);
//24
//24.1
  /* 24.2 */
  # 24.3
  //25 <?=$variable-такая запись сразу выводит запись на экран аналогично этой(<?php echo $variable)
  //26
  define(PI, '3.14');
  const MAX=12;
  //27 1)скопировали путь php.exe;2)создали переменную path в переменных окружения системы;3)запустили скрипт через php php_tasks в командной строке
  






