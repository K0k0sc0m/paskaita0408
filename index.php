<style>

    h1 {
        color: red;
    }


</style>


<?php


echo "<h1> PIRMAS </h1>";

$arr = [];

for ($i=0; $i < 30 ; $i++) { 
    $arr[$i] = rand(20,40);
}

foreach($arr as $a){
    echo $a . " ";
}

echo "<br>";
echo "<hr>";
echo "<h1> ANTRAS </h1>";

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

echo "<br>";
echo "<hr>";
echo "<h1> TRECIAS </h1>";

$arr3 = [[]];
$e = 0;

for ($i=0; $i < 10; $i++) { 
    $arr3[$i][$i] = $e++;
    
}

print_r($arr3);

echo "<br>";

foreach($arr3 as $array){
    foreach($array as $key=>$value){
        echo "Key:" .$key. "/ Value:" . $value. "<br>";
    }
}

echo "<br>";

foreach($arr3 as $array){
    foreach($array as $key=>$value){
      echo "Key:" .$key. "/ Value:" . $value*$value. "<br>";
    }
}

echo "<br>";
echo "<hr>";
echo "<h1> KETVIRTAS </h1>";

$gyvunas = array("species"=>" ","age"=>" ","name"=>" ","description"=>" ");

print_r($gyvunas);










?>




