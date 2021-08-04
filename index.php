<?php


$arr = [];

for ($i=0; $i < 30 ; $i++) { 
    $arr[$i] = rand(20,40);
}

foreach($arr as $a){
    echo $a . " ";
}

echo "<br>";
echo "<hr>";


//  $arr1 = range(0,9);
//  print_r($arr1);

$arr1 = [];
$b = 0;

for ($i=0; $i < 10 ; $i++) { 
    $arr1[$i] = $b++;
}

print_r($arr1);
echo "<br>";


//  $arr2 = range(10,19);
//  print_r($arr2);

$arr2 = [];
$c = 10;

for ($i=0; $i < 10 ; $i++) { 
    $arr2[$i] = $c++;
}

print_r($arr2);
echo "<br>";

for ($i=0; $i < 101; $i++) { 
       $d = array_rand($arr2);

        echo $arr2[$d]. " ";
}















?>




