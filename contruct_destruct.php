<?php

class A{
    public $name = "";
    public function __construct($name = "")
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "destruct done";    
    }
}

$a = new A("toan");
echo $a->name;

// class database{
//     function connect;
//     function disconnect;
//     public function __destruct()
//     {
//         $this->disconnect;
//     }
// }
?>