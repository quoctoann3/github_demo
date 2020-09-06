<?php

    //setcookie("name", "value", "expire", "path", "domain", "secure", "httponly")
    setcookie('toan', 'admin_toannq', time()+(86400*30),"/" );
    
    //create session:
    session_start();
    $_SESSION['color'] = "green";
    echo $_SESSION['color'];

    $_SESSION['gender'] = "male";
    echo $_SESSION['gender'];


    session_unset();
    session_destroy();
    echo $_SESSION['color'];

?>

<html> 
<body>

</body>
</html>