<?php

include_once ('meal_db.php');
$tmp = new meal_db();
$json_array = array();
$b;


      if(isset($_GET['testingN']))
      $test = $_GET['testingN'];
      if(isset($test) && ($test!==null)){
    
      
    $result = $tmp->MealRrviews($test);
while($row = mysqli_fetch_assoc($result)){
 $json_array[] = $row;
}

$b = json_encode($json_array);
echo  $b;
 //echo $red = "location: ../detail.php?ID=".$test; 
// header($red);

      }



if(isset($_POST['submit'])){

    $id = $_POST['mealID'];
    $rate = $_POST['volume'];
    $name = $_POST['name'];
    $review = $_POST['revArea'];
    $city = $_POST['city'];


    // $red = "location: ../detail.php?ID=".$id; 


    $tmp->addMealReview($id,$rate, $name,$review,$city);
    // header($red);


   }

   

   






