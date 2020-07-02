<?php
$temp = array(4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21);

// As nelabai supratau kaip naudoti foreach cikla cia :(

print_r (array_sum($temp));

echo "<br>";

print_r (count($temp));

echo "<br>";

$sumOfTemp = 474;
$arrayContentNumber = 30;
$averageTemp = $sumOfTemp / $arrayContentNumber;
echo $averageTemp;

echo "<br>";

echo round(15.8);
echo "<br> <br>";

rsort($temp);
print_r ($temp);

echo "<br> <br>";

$fiveLowestTemp = array_slice($temp, -5,5);
print_r ($fiveLowestTemp);

echo "<br>";

$fiveHighestTemp = array_slice($temp, 0,5);
print_r ($fiveHighestTemp);

echo "<br> <br>";

?>