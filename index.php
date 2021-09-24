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
    echo  ' гость сказал: " всем привет! " ' ;

$a = 80 ;
$b = 90 ;
    echo "В {$a}x или {$b}x годах" ;

$firstName = 'Виктор' ;
$lastName = 'Зинченко' ;
$fullName = $firstName.' '. $lastName ;
    echo $fullName ;
// неявное преорбразование
$a = '5 человек' ; //строка
$b = 10 ; //integer
$c =$a + $b ; //integer

    echo $c ;

$arr =array('Олег' , 'Виктор' , 'Андрей') ;

print($arr {1}) ;

$arr =array('name' => 'Олег' , 'age' => '21') ;

print ($arr ['age'] );

$array=array ('желтый' , 'синий' , 'красный') ;
$array[10] = 'зеленый' ;
    echo '<pre>' ;
print_r($array) ;
    echo '</pre>' ;

    unset ( $array[1]) ;

    echo '<pre>' ;
print_r($array) ;
    echo '</pre>' ;

$sum = count($array) ;
    echo $sum ;

$a = 5 ;
$b = 3 ;
$result =$a > $b ;
var_dump($result);

$a = 9 ;
$b = 10 ;
if ($a>$b)
    echo $a ;
elseif ($a == $b)
    echo 'Переменые равны' ;
else
    echo $b ;

$day=2;

//if ( $day == 1) {
  // echo 'Понедельник' ;
 // } elseif ($day == 2) {
  //echo 'Вторник' ;
  //} elseif ($day == 3) {
   // echo 'Среда' ;
  //} elseif ($day == 4) {
   //echo 'Четверг' ;
  //} elseif ($day == 5) {
   //echo 'Пятница' ;
  //} elseif ($day == 6) {
   //echo 'Суббота';
  //} elseif ($day == 7) {
   // echo 'Воскреснье';
  //} else {
   //echo 'неправильный день' ;
  //}

  switch ($day) {
    case 1; echo 'Понедельник' ; echo $day; break;
    case 2; echo 'Вторник' ; echo $day; break;
    case 3; echo 'Среда' ; echo $day; break;
    case 4; echo 'Четверг' ; echo $day; break;
    case 5; echo 'Пятница' ; echo $day; break;
    case 6; echo 'Суббота' ; echo $day; break;
    case 7; echo 'Воскресенье' ; echo $day; break;
  }

  $status = false ;
    echo ($status) ? 'Вкл' : 'Откл' ;
//ЦИКЛЫ
$i = 1 ;
while ($i <= 10) {
    echo $i ;
    $i = $i + 1 ;
}
echo 'Конец программы' ;

$i = 100 ;
do {
    echo $i;
    $i = $i + 1;
} while ($i <= 10);
    echo 'Конец программы';
    // echo 'Постфиксальный инкримент<br />' ;
    //$a = 5;
    //  echo "Должно быть 5: " . $a ++ . "<br />" ;
    //echo "Должно быть 6: " . $a . "<br />" ;

    echo 'префиксальный инкримент<br />' ;
    $a = 5;
    echo "Должно быть 6: " . ++$a . "<br />" ;
    echo "ДОлжно быть 6: " . $a . "<br />" ;

for ($i = 1; $i <=10 ; $i++) {
echo $i;
}

$students = array (
    array('name' => 'Виктор' , 'app' => 75), //0
    array('name' => 'Олег' , 'app' => 5), //1
    array('name' => 'Боря' , 'app' => 29), //2
    array('name' => 'Вася' , 'app' => 26), //3
    array('name' => 'Жорик' , 'app' => 4), //4
);

for($i = 0; $i < count ($students) ; $i++ ) {
    echo $i;
    echo $students [$i] ['name'] . ' -кв. № ' . $students[$i] ['app']. '<br />';
}

foreach ($students as $key => $value) {
    echo $key ;
    echo $value ['name'] . '<br />' ;
}

//Функции.Описание и вызов
//Аргументы функций
//function myFirstFunction($name, $surname) {
   // echo "<h1>Привет , $name $surname! </h1>" ;
//}
//myFirstFunction ('Виктор', 'Зинченко') ;

function myFirstFunction($array) {
    foreach ($array as $name) {
     echo 'Hello , ' .$name ;
    }
}

$array = array ('Антон', 'Олег', 'Саша') ;
myfirstfunction($array);

$name1 = 'Витя' ;
$name2 = 'Саша' ;

function test(){
    $name3 = 'Жорик' ;
    echo 'hello, ' . $name3 . '<br/>' ;

    //что бы в середине функции были видны переменные с глобал спользует "global" and "$GLOBALS"

    global $name1 ;
    echo 'hello, ' . $name1 . '<br/>' ;

    echo 'hello, ' . $GLOBALS ['name2'] . '<br/>' ;
}
function howManyTimes() {
    static $a= 0;
echo  ++$a ;
}
howManyTimes () ;
howManyTimes () ;
howManyTimes () ;

//Пользовательские функции

$array = array (
        'Автотехника' => array (
                'Вело' => array (
                        'Велосипеды' => array (
                                '(товар) Extreme' => 10,
                                '(товар) Author' => 4,
        ),
           'Самокаты' => 12,
     ),
                'Авто' => array (
                        'Opel' => array(
                                 '(Товар) Vivaro' => 5,
            ),
                        '(Товар) Honda' => 10,
                        '(Товар) Audi' => 11,
      ),
                '(Товар) Аксесуары' => 7,
   ),
        'Фототехника' => array (
            '(Товар) Фотокамеры' => 6,
             '(Товар) Видеокамеры' => 3,
    ),
        '(Товар) Другое' => 3,
);

//$s = 0 ;

//foreach ($array as $level1) {
  //  if (is_array($level1)) {
    //    foreach ($level1 as $level2) {
      //      if (is_array($level2)) {
        //        foreach ($level2 as $level3) {
          //          if (is_array($level3)) {
            //            foreach ($level3 as $level4) {
              //              if (is_array($level4)) {
                //                echo '<pre>';
                  //              print_r($level4);
                    //            echo '</pre>';
                      //      } else {
                        //        $s += $level4;
                          //  }
           //             }
             //       } else {
               //         $s += $level3;
                 //   }
              //  }

 //           } else {
   //                     $s += $level2;
     //       }
       // }
 //   }else {
   //     $s +=$level1;
 //   }

//}

//echo '<hr>' . $s;

function sum($array) {
    if (is_array($array)) {
        foreach ($array as $element ) {
            echo '<pre>';
            print_r($element);
            echo '</pre>';
        }
    }
}
$result = sum($array);

print_r($result);

//встроенные функции PHP

$arr = [ 1 ,2, 3, 4, 5, 6, 7, 8, 9, 10 ] ;

$arr2 = array_reverse($arr) ;

print_r($arr2) ;

// Форматирование строк

$city = 'Лондон' ;
$percent = 22 / 41 * 100 ;
$total =  1000;
$format= 'По данным статистики %.2f из %d опрошенных ... в городе %s' ; //%.2f после точки цифра 2 указывает сколько символов показывать пссле запятой
printf($format , $percent , $total , $city) ;

//Математические функции

$arr = [1, 2, 3, 4] ;
$f = 4.6287634 ;

//echo 'max($arr): ' ;
//echo max($arr).'<hr/>';

//echo 'min($arr): ' ;
//echo min($arr).'<hr/>';

//echo 'rand (10 ,15): ' ;
//echo rand(10, 15).'<hr/>'; // эта функция генирирует случайное число от 10 до 15

//echo 'round($f): ' ;
//echo round($f).'<hr/>';   //функция округляет число

//echo 'ceil($f): ' ;
//echo ceil($f).'<hr/>';  // округляет к большему

echo 'floor($f): ' ;
echo floor($f).'<hr/>'; //округляет к меньшему

$group1 = ['24' =>'Ваня', '25' => 'Кирилл'];
$group2 = ['37' =>'Саша', '35' => 'Богдан'];
$commonGroup = $group1 + $group2 ;
print_r($commonGroup);

$arr1 = [23 , 45, 15 ,28];
$arr2 = ['37' =>'Саша', '35' => 'Богдан', '36' =>'Олег', '28' => 'Жора'];

sort($arr1);
ksort($arr2);

echo '<pre>';
print_r($arr1);
echo'</pre>';

echo '<pre>';
print_r($arr2);
echo'</pre>';

$now = getdate();

echo '<pre>';
print_r($now);
echo'</pre>';
//http;

?>


  <div>
    <form action="index.php"method="get">
        A:  <input type="text"name="a"><br>
        B:  <input type="text"name="b"><br>
        C:  <input type="text"name="c"><br>
         <input type="submit"value="submit"name="submit">
    </form>
</div>

</body>

