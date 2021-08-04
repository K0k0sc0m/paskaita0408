<?php


$arr = [];

for ($i=0; $i < 30 ; $i++) { 
    $arr[$i] = rand(20,40);
}

foreach($arr as $a){
    echo $a . " ";
}

echo "<br>";


$arr1 = [];
$b = 0;



for ($i=0; $i < 11 ; $i++) { 
    $arr1[$i] = $b++;
}

print_r($arr1);




?>




