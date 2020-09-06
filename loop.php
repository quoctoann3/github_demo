<?php

for ($x=0; $x<=10;$x++){
    echo "$x<br>";
}

$a = ["red", "green", "blue"];

foreach($a as $value){
    echo $value."<br>";
}

foreach($a as $key => $value){
    echo $key."_".$value."<br>";
}

echo $a[1]."<br>";

$b = 1;
while($b<=10){
    echo "Gia tri cua b la: ".$b."<br>";
    $b++;
}

$c = 1;
do{
    echo "Gia tri cua bb la: ".$c."<br>";
    $c++;
} while($c<=10);

?>
