<?php

function test_variable_static(){
    static $x= 0;
    $x++;
    echo "gia tri cua x static la ".$x."<br>";
}

test_variable_static();
test_variable_static();
test_variable_static();


//static $x: dat trong ham, thuc thi xong van co the tiep tuc goi
//global $x: lay bien x ngoai ham

?>