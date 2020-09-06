<?php
 
 class Animal{
    var $foot;
    var $head;
        
    function run ($param = null){

    }
    function eat($param = null){

    }
 }

$tiger = new Animal();

$tiger -> foot=10;
$tiger -> run = -20;
echo $tiger->foot."</br>";
echo $tiger ->run."</br>";

//Inheritance:--------------------------
class mammal extends Animal{
    //overide
    var $foot = 4;
    var $name;
    function getname(){
        return $this->name;
    }
    function run ($param = null){
        return "ket qua la ".$param;
    }
}

$hippo = new mammal();
$hippo -> name="toan nq";
echo $hippo -> run ($param=1000);
echo $hippo -> run ($param=1000);

?>