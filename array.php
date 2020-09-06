<!DOCTYPE html>
<html>
<?php

$a = ["BMW","AUDI","MERCEDES"];
echo $a[2];
var_dump ($a)."<br>";
$b = [
    "key 1"=>100, 
    "key 2"=>1000
];

$c = [
    "key 1"=>100, 
    "key 2"=>1000,
    "key 3"=>[
        "key_sub"=>[
            2
        ]
    ]
];

$b["key 3"] = 10000;
var_dump ($b)."<br>";
var_dump($c)."<br>";

$c ["key 3"]["sub2"] = 100000;
var_dump ($c);
?>
</html>