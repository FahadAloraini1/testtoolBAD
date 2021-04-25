<?php
class meal_db{
private $conn;



function __construct() {
    $this->conn = new mysqli("localhost","root","","ch8"); 
 }




public function getMealByID($id){
    
    $sqli_getelementById = "SELECT * FROM meal where id = '$id'";  
     $result =  mysqli_query($this->conn, $sqli_getelementById);

    return $result;

}

public function getAllMeals(){
    
    $sqli_getelementById = "SELECT * FROM meal";  
     $result =  mysqli_query($this->conn, $sqli_getelementById);

    return $result;

}

public function MealRrviews($id){
    
    $sqli_getelementById = "SELECT * FROM reviews where meal_id = '$id'";  
     $result =  mysqli_query($this->conn, $sqli_getelementById);

    return $result;

}


public function addMealReview($id,$rate, $name,$review,$city){
    
    $sqli_getelementById = "INSERT INTO reviews (reviewer_name, city, rating,review,meal_id)
    VALUES ('$name', '$city', '$rate','$review','$id')"; 
     $result =  mysqli_query($this->conn, $sqli_getelementById);

  

}




}

