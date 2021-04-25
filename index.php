<?php

include ('php/cart.php');
include_once ('php/meal_db.php');


?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<title>index</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&family=Roboto:ital@1&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">







  </head>

<body>
<header>
<?php 
 require 'include/inc.header.php';

?>
</header>





<div class="bg-image justify-content-center align-items-center"
style="background-image: url('projectImages/party.png'); 
        height: 100vh">

      <h1 class="font01  white" id="PT" >Party Time</h1>

      <h3 class="Shape-one font02"> buy any 2 burgers and<br>
     get 1.5L pepsi Free</h3>
    
    <input type="button" value="Order now" class="order red" id="first-botton">

</div>

<div class="container-fluid" >

  <div class="row" id="genrac">



  </div>

<div>


<div class="words">
  <div class="wantToEat wantTo red font-size"> Want to Eat</div>
  <div class="TrOurMost tryOut"> Try our most dilusitios food and usuallu take mimutes to deliver</div>

  <div class="smallMenu">

   <ul class="menulist">
    <li class="pizza"><a href="" class="black font02  removeLine">pizza</a></li>
    <li class="fastfood"><a href="" class="black font02 removeLine">fast food</a></li>
    <li class="cubcake"><a href="" class="black font02 removeLine">Cupcake</a></li>
    <li class="sandwich"><a href="" class="black font02 removeLine">sandwich</a></li>
    <li class="spagitti"><a href="" class="black font02 removeLine">spaghetti</a></li>
	  <li class="burger1"><a href="" class="black font02  removeLine">Burger</a></li>
  </ul>
  
  </div>
</div>


<div class="container-fluid" style="background-color: #FFAA00">

  <div class="row">

    <div class="col-xs-12 col-md-12 col-lg-6 ">

      <img src="projectImages/delivery.png"  height="90%" alt="d">
    </div>

    <div class="col-xs-12 col-md-12 col-lg-6">


      <div class="shape-two">
        <p id="shape-two-text"> We garantee 30Min delivery </p>
      </div>
      

    </div>

  </div>

</div>

<div class="ourMost red"> <h2 id="menu"> Our most populer recipes </h2></div>
<div class="TrOurMost tryOut"> Try our most dilusitios food and usuallu take mimutes to deliver</div>
 
<div class="container-fluid" >

  <div class="row" id="gen">

  

  </div>

<div>




<br>
<br>
<h2 id="Testimonials" class="font01 red wantTo Testimonials">clints testimonials</h2>
<div class="container">

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-6">
   <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="projectImages/man-eating-burger.png" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="projectImages/man-eating-burger.png" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="projectImages/man-eating-burger.png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>
<div class="col-xs-12 col-md-12 col-lg-6 ">
  <p>lorem ispum dolor sit amet consectetur adipiscing elit. Neque ullam deserunt laborum laboriosam veritatis quibusdam blanditiis dolor exercotationem velit commodi quae assumenda icidunt voluptas. corporis ex nulla repellendus ullam nihi!</p>
</div>
</div>
</div>

<div>


<?php




?>

</div>




<footer>
<?php 
 require 'include/inc.footer.php';
?>
</footer>





<script src="app.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
  var htmlE; 
<?php 
$x1 = new meal_db();
$x2 = $x1->getAllMeals();

$i = 0;
?>





var rate;
var name;
var price;
var img;


    
<?php
   while($tmp = mysqli_fetch_assoc($x2)) {
  
?>

rate = "4.44"; 
      name = "<?php echo $tmp['title']; ?>"; 
      price = "<?php echo $tmp['price']; ?>"; 
      img = "<?php echo $tmp['img']; ?>"; 
      id = "<?php echo $tmp['id']; ?>"; 
      //id--;



$("#gen").append(
     '<div class="col-xs-12 col-md-4 col-lg-3">'+

'<div class="card" style="width: 18rem;">'+
  '<div onclick="location.href='+"'"+'detail.php?ID='+id+"'"+';">'+
  '<img src="'+'projectimages/'+img+'" class="card-img-top" alt="Meal1">'+
  '</div>'+
  '<div class="card-body">'+
  '<div onclick="location.href='+"'"+'detail.php?ID='+id+"'"+';">'+
    '<p>&#11088;'+rate+' rating</p>'+
    '<h5 class="card-title">'+name+'</h5>'+
    '<p class="card-text">some descreption</p>'+
    '</div>'+
    '<form action="php/cart.php" method="get">'+
    '<button class="btn btn-warning cartINFO" type="submit" name="submit" value ="'+id+'"> add to cart </button> <span>'+price+'</span> '+
    '</form>'
  +
  '</div>'+
'</div>'+
'</div>');



<?php
};
?>



<?php

if(isset($_COOKIE['resent-bought'])){ ?>

$("#genrac").append('<h1 class="ourMost red">resent bought</h1>');
var elements = [];

<?php

$tmpdata =  $_COOKIE['resent-bought'];
for($i = 0;$i<strlen($tmpdata);$i++){
$data = $tmpdata[$i];
$x2 = $x1->getAllMeals();
while($tmp = mysqli_fetch_assoc($x2)) {
if($tmp['id'] == $data){
?>

var rate2 = "4.4"; 
    var  name2 = "<?php echo $tmp['title']; ?>"; 
     var price2 = "<?php echo $tmp['price']; ?>"; 
     var  img2 = "<?php echo $tmp['img']; ?>"; 
    var  id2 = "<?php echo $tmp['id']; ?>"; 
    //id2--;
     
      var check = elements.includes(id2);
    if(!check){
      elements.push(id2);
    $("#genrac").append(
     '<div class="col-xs-12 col-md-4 col-lg-3">'+

'<div class="card" style="width: 18rem;">'+
  '<div onclick="location.href='+"'"+'detail.php?ID='+id2+"'"+';">'+
  '<img src="'+'projectimages/'+img2+'" class="card-img-top" alt="Meal1">'+
  '</div>'+
  '<div class="card-body">'+
  '<div onclick="location.href='+"'"+'detail.php?ID='+id2+"'"+';">'+
    '<p>&#11088;'+rate2+' rating</p>'+
    '<h5 class="card-title">'+name2+'</h5>'+
    '<p class="card-text">some descreption</p>'+
    '</div>'+
    '<form action="php/cart.php" method="get">'+
    '<button class="btn btn-warning cartINFO" type="submit" name="submit" value ="'+id2+'"> add to cart </button> <span>'+price2+'</span> '+
    '</form>'
  +
  '</div>'+
'</div>'+
'</div>');

    };

<?php
}
}
}};
?>




});






</script>


</body>

