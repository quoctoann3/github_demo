<!DOCTYPE html>
<html>
<?php

$x = 1;
$y = 5;

switch ($x.$y) {
    case $x > $y:
        echo "$x is greater than $y";
        break;
    case $x < $y:
        echo "$x is lower than $y";
        break;
    default:
        echo "They are equal";
        break;
}

?>
</html>