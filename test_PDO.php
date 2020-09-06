<?php
$username = "root";
$password = "";
$host = "localhost";
$database = "thuc_hanh";

$sql = "SELECT * FROM customer";

try{
    $connection = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = $connection -> prepare($sql);
    $query->execute();

    $result = $query -> fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $item){
        var_dump($item);
    }
} catch (Exception $e){
    echo $e -> getMessage();
}


?>