<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Heading</h1>
<p>Hello</p>
<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

$i = 5 ;
while ($i >= 0) {
    echo $i .',';
    $i = $i - 1 ;
}

$a = '5 человек';
$b = 2;
$c = $a + $b;
echo $c;

$a = 11;
$b = 17;
$resault = $a < $b;
var_dump($resault);



$a = 20;
$b = 20;
if($a > $b) {
    echo $a;
    }
    elseif ($a == $b){
        echo 'переменные равны';
    }
else{
    echo $b;
    }

$day = 2;
switch ($day) {
    case 1; echo 'Понедельник' ; echo $day; break;
    case 2; echo 'Вторник' ; echo $day; break;
    case 3; echo 'Среда' ; echo $day; break;
    case 4; echo 'Четверг' ; echo $day; break;
    case 5; echo 'Пятница' ; echo $day; break;
    case 6; echo 'Суббота' ; echo $day; break;
    case 7; echo 'Воскресенье' ; echo $day; break;
    default; echo 'ошибка' ;
}

$i = 11;
do {
    echo $i;
    $i=$i++;
}while ($i <= 10);
    echo 'конец программы' ;

$students = array (
    array('name' => 'Виктор' , 'app' => 75), //0
    array('name' => 'Олег' , 'app' => 5), //1
    array('name' => 'Боря' , 'app' => 29), //2
    array('name' => 'Вася' , 'app' => 26), //3
    array('name' => 'Жорик' , 'app' => 4), //4
);



foreach ($students as $key => $value) {
    echo $key;
    echo $value ['name'] . '<br />' ;


}

$house = 1;
switch($house) {
    case 1;echo 'Боря';echo $house;break;
    case 2;echo 'Вася';echo $house;break;
    case 3;echo 'Жорик';echo $house;break;
    default;echo 'ошибка';
}

var_dump(random_int(1,31));
var_dump(rand(44,55));

echo (date("d.m.Y 'Время' h.i.s "));


$a = 1;
$b = 2;
$c = 3;
echo ($a+$b+$c);



$start = 20;
$end = 45;
$sum = 0;

for ($i = $start; $i <= $end; $i++) {
    if (fmod($i,5) == 0) {
        $sum += $i;
    }
}
echo "Сумма: {$sum}\n";

$arr =[2,7,15,20];

echo 'min'. '-';
echo min($arr). ',';
echo 'max'. '-';
echo max($arr). '<br />';


var_dump(pow(1, 1)). '<br />';
echo pow(2, 2). '<br />';
echo pow(3, 3). '<br />';

$n = 3;
$s = 0;
$n_ = 1;

while( $n_ <= $n ) {

    $s += pow($n_, $n_);
    $n_ ++ ;
}

echo "сумма$s";

$number = 442158755745;
echo substr_count($number, '5'). '<br />';

$card = 14;
switch ($card) {
    case 1;echo 'единица'; break;
    case 2;echo 'двойка'; break;
    case 3;echo 'тройка'; break;
    case 4;echo 'четверка'; break;
    case 5;echo 'пятерка'; break;
    case 6;echo 'шестерка'; break;
    case 7;echo 'семерка'; break;
    case 8;echo 'восьмерка'; break;
    case 9;echo 'девятка'; break;
    case 10;echo 'Десятка'; break;
    case 11;echo 'Валет'; break;
    case 12;echo 'Дама'; break;
    case 13;echo 'Король'; break;
    case 14;echo 'Туз'; break;

    default; echo 'Ошибка.Такой карты не существует.';
}

$name= 'Ivanov Ivan Petrovich';
echo substr($name, 0,6). ' ';
echo substr($name, 7,1). '.';
echo substr($name, 12,1);

for( $i=0; $i<=100; $i++) {
    if(($i%2)==1){
        continue;
    }
    echo $i. ',';
}

















?>




</body>
