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

//--foreach($arr as $a){
//--    echo $a . " ";
//--}

for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i]. " ";
}


echo "<br>";
echo "<hr>";
echo "<h1> ANTRAS </h1>";

//  $arr1 = range(0,9);
//  print_r($arr1);

$arr1 = [];

for ($i=0; $i < 10 ; $i++) { 
    $arr1[] = $i;
}

print_r($arr1);
echo "<br>";


//  $arr2 = range(10,19);
//  print_r($arr2);

$arr2 = [];

for ($i=10; $i < 20 ; $i++) { 
    $arr2[] = $i;
}

print_r($arr2);
echo "<br>";

for ($i=0; $i < 101; $i++) { 
       $d = array_rand($arr2);

        echo $arr2[$d]. " ";
}

echo "<br>";
echo "<br>";





echo "<br>";
echo "<hr>";
echo "<h1> TRECIAS </h1>";

$arr3 = [];


for ($i=0; $i < 10; $i++) { 
    $arrmin =[];
    for ($a=0; $a < 10; $a++){
    $arrmin[] = rand(0,9);
    }
    $arr3[] = $arrmin;
}

// echo "<pre>";
print_r($arr3);
// echo "</pre>";

echo "<br>";

$arrexm = [];

for ($i=0; $i < 10; $i++) { 
    for ($a=0; $a < 10; $a++){
        $arrexm[$i][] = rand(0,9);
    }  
}

print_r($arrexm);

echo "<br>";



// foreach($arr3 as $array){
   // foreach($array as $key=>$value){
     //   echo "Key:" .$key. "/ Value:" . $value. "<br>";
   // }
// }

for ($i=0; $i < count($arr3); $i++) { 
    for ($a=0; $a < count($arr3[$i]); $a++) { 
        echo $arr3[$i][$a]. " ";
    }
    echo "<br>";
}

for ($i=0; $i < count($arr3); $i++) { 
    for ($a=0; $a < count($arr3[$i]); $a++) { 
        echo $arr3[$i][$a] * $arr3[$i][$a]. " ";
    }
    echo "<br>";  
}

echo "<br>";
echo "<hr>";
echo "<h1> KETVIRTAS </h1>";

$gyvunas = array("species"=>"kangaroo","age"=>"3","name"=>"Skippy","description"=>"Well.. it likes to jump a lot.");

print_r($gyvunas);

echo "<br>";
echo "<hr>";
echo "<h1> PENKTAS </h1>";

$names = ["Antanas", "Algis", "Aldrone", "Rimas", "Albinas", "Valdemaras", "Pavel", "Aleksandras", "Rokas", "Vejunas"];
$species = ["lion", "mice", "dog", "cat", "raven", "tiger", "fish", "jaguar", "elephant", "peret"];
$description = ["strong and brave", "small and fat", "best man friend", "arogant alien", "smart and can fly",
"fast and beautiful", "can not speak", "fast and brave", "has big ears", "can speak russian"];



$zoo = [];

for ($i=0; $i < 20; $i++) { 
    $zoo[$i]["name"] = $names[rand(0, count($names)-1) ];
    $zoo[$i]["species"] = $species[rand(0, count($species)-1) ];
    $zoo[$i]["age"] = rand(0,12);
    $zoo[$i]["description"] = $description[rand(0, count($description)-1) ];
}


for ($i=0; $i < count($zoo); $i++) { 
    echo $zoo[$i]["name"]. " ". $zoo[$i]["species"]. " ".  $zoo[$i]["age"]. " ". $zoo[$i]["description"]. " <br>";
}


echo "<hr>";
echo "<h1> SESTAS </h1>";

for ($i=1; $i < 11; $i++) { 
    for ($a=1; $a < 11; $a++) { 
        echo $i*$a. " ";
    }
    echo "<br>";
}

echo "<br>";
echo "<hr>";
echo "<h1> SESTAS </h1>";

sayHi();
function sayHi(){
    echo "hi<br>";
}

echo "<hr>";

sayHiYou("Petras");
$vardas = "Jonas";
sayHiYou($vardas);
function sayHiYou($name){
    echo "Labas ". $name. "<br>";
}

echo "<hr>";

echo myPi();
function myPi(){
    return 3.1415926;
}

echo "<hr>";

echo sq(365,24);
//  echo sq(60, sq(60, sq(365,24)));
//  echo sq (sq(60,60) , sq(365,24));
function sq($a, $b){
    return $a * $b;
}

echo "<hr>";

function circleSq($r){
    return myPi() * $r * $r;
}

function circleLength($r){
    return 2 * myPi() * $r;
}

echo circleSq(10). "<br>";
echo circleLength(10). "<br>";

echo "<hr>";

function circleInfo($r){
    echo "apskritimo ilgis: " .circleSq($r). "<br>";
    echo "apskritimo plotas: " .circleLength($r). "<br>";
}
circleInfo(24);

echo "<hr>";








?>




