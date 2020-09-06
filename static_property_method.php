<?php

class concho{

    public static $static_Variable = 7;

    public $lvariable;

    public static function run(){
    }
}
$a = new concho();
$a->variable=5;
echo $a->variable;

$b = new concho();
$b->variable=6;

echo "<br>";
echo $a->variable;
echo $b->variable;

//-----------//-----------//-----------//-----------//-----------//-----------//-----------
//static
echo concho::$static_Variable;
echo concho::run();

class database{
    public static $connect = null;

    public function __construct()
    {
        $this->connect();
    }

    public function connect(){
        //connect den database
        if(self::$connect === null) {
            self::$connect = mysql_connect();
        }
        return self::$connect;
    }

    // public static function method1(){
    //     self::$connect;
    // }
}

$a = new database;

?>