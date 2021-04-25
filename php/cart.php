

<?php


if(isset($_GET['submit'])){
    
   
if(isset($_COOKIE['cookieName'])){
    setcookie('cookieName', $_COOKIE['cookieName'].$_GET['submit'],time()+3600,"/");
  

}else{
      
        setcookie('cookieName',$_GET['submit'] ,time()+3600,"/");
       

}

header('location: ../index.php');
}



