<?php 
require 'event.php';

// вотс... начнем!

// узнаваем что как получить данные с перепенных! 

// я объявляю её в 'event.php' см. её для подробностей.

// хули, ебанем сразу иф(условия)

echo '<hr>';
if( $var == 120 ) {
  echo 'да';
} else  { //иначе
  echo 'ссылка';
} // см. консоль



$var = 0.0;
if($var) {
  echo '<p>true</p>';
} else {
  echo '<p>false</p>';
}
// кароче, если в перепенной число "0" то он будет возвращать фалсе, если что-то выше нуля , или типа str то труе.

$float = 4.3; 

$nunber = (int)$float;
echo $number;

// у нас было4,3 он отбрасывает вещественное число, преобрзивая его в цело численное типу.

// сейчас попробую показать что-то интересное 

echo '<h3>Числа</h3>';
echo '<hr>';

$cheslo = array( "44", 133, "50", "пизда");

foreach ($cheslo as $element) {
  if (is_numeric($element)) {
  echo var_export($element, true) . " - число", PHP_EOL;
  } else {
  echo var_export($element, true) . " - Не является числом", PHP_EOL;
  }
}

echo round(21.19292, 2) . PHP_EOL; // округляет число.

echo ceil(4.7) . PHP_EOL; // cail, намного легче чем роунд. выдает нам 5.

// есть ещё так же функция которая переводит число из десятичной системы счисления в двоичную.

echo decbin( 11 ) . PHP_EOL;
echo decbin(26) . PHP_EOL;

echo "<h3>ООП-классы</h3>";
echo "<hr>";

// желательно создать для них отельный файл, что мы сейчас и сделаем.
require 'class.php';

$point = new points;
$point->x = 22;
$point->y = 23;
// иы обращаемся к нашему переменной, и через дивиз и знака больше мы вводим ту переменную которая есть у нас в классе, через ровно присвавием то что Хотим.
echo $point->x + $point->y . PHP_EOL;

echo pan::$str . PHP_EOL;

$first = $second = 2;
$first = 3; 
echo $first . "<br>" . $second;


$first = new pans;
$first->a=5 . PHP_EOL;
$first->c=5 . PHP_EOL;

$second = $first;
$second->a=10 . PHP_EOL;
$second->s=10 . PHP_EOL;

echo "a: {$first->a} s: {$first->s}";