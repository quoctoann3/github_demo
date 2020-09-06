<?php

class dongvat{
    
    public $pubic_variable = 100; 

    protected $protected_variable = 200;

    private $private_variable = 300;

    public function a($x, $y){
        $z = $x + $y;
        return $z;
    }

    private function b($x, $y){
        $z = $x - $y;
        return $z;
    }

}

class cho extends dongvat{
    public function test(){
        $this -> pubic_variable;
    }
}

$a = new dongvat();
echo $a->pubic_variable;
$b = new cho();
echo $b -> a(20,10);

$b -> test();


//-=====================================================================================================
class database{
    protected $result = [];

    //GET _ SET
    function getResult(){
        return $this->result;
    }
    function setResult($result){
        $this->result= $result;
    }
    
    public function query(){
        $this->setResult([1,2,3]);
        return $this->result;
    }
}

$a2 = new database();
var_dump( $a2 -> getResult());







?>