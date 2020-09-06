<?php

//Tham tri
function show_my_name($name,$age){
    echo $name."<br>";
    echo $age."<br>";
}

show_my_name("Hayden", "22");

//Tham chieu
function change_value(&$value){
    $value = 20;    
}

$hi = 10;
change_value($hi);
var_dump($hi);


?>
