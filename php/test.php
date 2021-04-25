<?php

include ('meal_db.php');
echo 'hello <br>';

$hi = new meal_db();

$xx =  $hi->getElementByID(2);
echo $xx;






?>