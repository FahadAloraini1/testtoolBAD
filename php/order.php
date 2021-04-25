
<?php


if(isset($_POST['submit'])){
    
    setcookie('resent-bought', $_COOKIE['cookieName'],time()+3600,"/");
    setcookie('cookieName',"" ,time()-1,"/");

    header('location: ../index.php');
}