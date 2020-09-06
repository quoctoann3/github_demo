<?php
$username = "root";
$password = "";
$host = "localhost";
$database = "thuc_hanh";

$connection = new mysqli($host, $username, $password, $database);
if($connection -> connect_error){
    die("connection is failed");
}

$sql = "SELECT name FROM customer ";
$query = $connection -> query($sql);
while ($row = $query -> fetch_assoc()){
   
    echo $row["name"]."</br>";
  
}

//------------------------------------------------------
$sql = "UPDATE"; //DELETE HOAC //INSERT (
$query = $connection -> query($sql);
if($sql == TRUE){

}

?> 