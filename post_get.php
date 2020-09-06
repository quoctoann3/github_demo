<?php
//$_GET
// if (isset($_GET["name"]) && isset ($_GET["age"])){
//     echo "Welcome ".$_GET['name']."</br>";
//     echo "You are ".$_GET['age']."</br>";

//     die();
// }

//$_POST
if (isset($_POST["name"]) && isset ($_POST["age"])){
    echo "Welcome ".$_POST['name']."</br>";
    echo "You are ".$_POST['age']."</br>";

    die();
}

?>

<html>
    <body>
        <form action="post_get.php" method="POST">
            Name:
            <input type="text" name="name" />
            Age:
            <input type="text" name="age" />
            <input type="submit" />
        </form>
    </body>
</html>