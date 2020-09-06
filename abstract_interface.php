<?php

abstract class dongvat{
    public $chan;

    abstract function run($chan);
    public function eat(){

    }
}

class concho extends dongvat{
    public function run($chan)
    {
        echo "Cho chay bang 4 chan"."<br>";
    }
}

class connguoi extends dongvat{
    public function run($chan)
    {
        echo "Nguoi chay bang 2 chan";
    }
}

$concho = new concho;
echo $concho->run(4);

$connguoi = new connguoi;
echo $connguoi->run(2);

//Khong the tao object truc tiep tu abstract class


//---------------------------------------------------------------------------------------------------
//Interface:
interface animal {
    function eat();
    function run();
    function sleep();
    function sound();
}

class dog implements animal{
    function eat()
    {
        echo "3 times a day";
    }
    function run()
    {
        echo "20km/h";
    }
    function sleep()
    {
        echo "8 hours a day";
    }
    function sound()
    {
        echo "gau gau";
    }

}

$golden = new dog();
echo $golden->run();

?>