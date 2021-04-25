


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-primary  fixed-top nav1 navbar-dark" id="Dnave">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="projectImages/logo-White.svg" alt="logo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item" id="testme">
          <a class="nav-link" href="#menu">MENU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#menu">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Testimonials">Teastimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="detail.html" id="sp">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="sp">profile</a>
        </li>
        <li class="nav-item" id="cartB2B">
          <a class="nav-link" href="#" id="sp">Cart <span id="Cart_number">0</span></a>
        </li>
      </ul>
    </div>
  </div>

  </nav>

  <div class="bg-modal" id="z_in" style="display: none">
	<div class="modal-contents">

		<div class="close">+</div>
	<h3>cart contant</h3>
  <hr>
   <div class="cart-row">
                <span class="cart-item cart-header cart-column" id="cartSpace">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                
                <div id="gencart">
                
                
                </div>
                
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                
            </div>
            <hr>
<button type="button" class="closeB " id="Cart-botton">close</button>
<form action="php/order.php" method="post">
    <button id="Cart-botton" type="submit" name="submit" value =""> order now </button> 
    </form>

		

	</div>
</div>

<script>
$(document).ready(function(){
 

<?php

$tmp = new meal_db();

?>

var tot= 0;
<?php
$id = $_COOKIE['cookieName'];
?>
var cartNum = "<?php echo strlen($id) ?>";
<?php
for($i = 0;$i<strlen($id);$i++){
 
$CurrentID = $id[$i];
$tmp2 = $tmp->getMealByID($CurrentID);
$tmp22 = mysqli_fetch_assoc($tmp2);
?>
var name = "<?php echo $tmp22['title']; ?>"; 
var price = "<?php echo $tmp22['price']; ?>"; 
tot += <?php echo $tmp22['price']; ?>;

$("#gencart").append(
  '<br>'+
  '<span id="cartSpace">'+name+'</span>' +'<span>'+price+'</span>'
   );

  





<?php
  
};
?>

$(".cart-total").append(
'<strong class="cart-total-title">Total</strong>'+
                '<span class="cart-total-price">$'+tot+'</span>'
);


document.getElementById('Cart_number').innerHTML = cartNum;


});
</script>
