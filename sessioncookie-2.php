<?php

// if(isset($_COOKIE['toan'])){
//     echo $_COOKIE['toan'];
// }

//xoa cookie
setcookie('toan', 'admin_toannq', time()-(86400*30),"/" );
if(isset($_COOKIE['toan'])){
    echo $_COOKIE['toan'];
}else{
    echo "cookie da bi huy";
}   

?>