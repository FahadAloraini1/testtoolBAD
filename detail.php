<?php
include_once ('php/meal_db.php');
include_once ('php/review.php');

?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
	<title>detail</title>
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
<?php
$ID = $_GET['ID'];
$tmpD3 = $tmp->getMealByID($ID);
$obj = mysqli_fetch_assoc($tmpD3);

?>
<script>
$(document).ready(function(){

  document.getElementById("detailImg").innerHTML = '<img src="projectImages/'+"<?php echo $obj['img']; ?>" +'" alt="Burger" id="Dpic">';
  document.getElementById("detailName").innerHTML = "<?php echo $obj['title']; ?>";
  document.getElementById("detailPrice").innerHTML =  "<?php echo $obj['price']; ?>"; 
  document.getElementById("detailRate").innerHTML = "&#11088;" +"<?php echo '4.44'; ?>";
  document.getElementById("detailrevName").innerHTML = "<?php echo 'nothing yet'; ?>"; 
  document.getElementById("detailravInfo").innerHTML = "<?php echo 'notheng yet '; ?>" + " - " + "<?php echo 'notheng yet '; ?>" + " - " + "<?php echo '4.44'; ?>" + " &#11088;"; 


});
</script>
<p id="space1">.</p>
<div class="container"> 
  <div class="row">

    <div class="col-xs-12 col-md-12 col-lg-6 " id="detailImg">
	
    </div>
    <div class="col-xs-12 col-md-12 col-lg-6">

 <h2 class="font01 red " id="detailName"></h2>
    <p id="detailPrice"></p>
   
   <p id="detailRate"></p>
   <p id="marg">lorem ispum dolor sit amet consectetur adipiscing elit. Neque ullam deserunt laborum laboriosam veritatis quibusdam blanditiis dolor exercotationem velit commodi quae assumenda icidunt voluptas. corporis ex nulla repellendus ullam nihi!</p>

   <div class="buttons">
     
     <input type="button" value="-" onclick="DEC()"  class="number_of_order"> 
       <input type="button" value="1"  class="number_of_order" id="number_of_items">
        <input type="button" value="+" onclick="INC()"  class="number_of_order">

        <form action="php/cart.php" method="get">
    <button class="add_to_cart" type="submit" name="submit" value ="<?php echo $obj['id']; ?>"> add to cart </button> 
    </form>

      
     </div>
      

    </div>

  </div>

</div>

  <button type="button" id="DescBtn" class="btn btn-light" >Description</button>

  <form id="testingForm">
  <button type="submit" id="ReviewsBtn" class="btn btn-light" name="testsubmit">Reviews</button>
<input type="hidden" name="testingN" value=" <?php echo $_GET['ID']  ?>">
<!-- <button type="submit" name="testsubmit" >hi there </button> -->
</form>


  <form id="DecsSection">

  <p class="Dorder leftmargin" id="marg">

    lorem ispum dolor sit amet consectetur adipiscing elit. Alias dolore hie quaerat deserunt eam lusto architecto, offica impedit consequuntur earum volupatatum totam que minima molestae velit nesciunt volupats praesentimm est. 
    <br> <br>
    Nam nesciunl ex earum inventore corrupli consequundar moleslias accusamus eaque. dignissimos exerciutationem expededita adipisei dolor nisi! Blanditiis cannis, nobis earum non archiecto sapieante tempora asperiores minus hie , deleniti enim!
  </p>
</div>
    <h4 class="margin" id="Nfact">nutrition facts</h4>
    
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
    <table>
    
    <tr>
      <th colspan="3">Supplement Facts </th>
    </tr>
    <tr class="DarkBack">
      <th colspan="3">Serving Size: 1 Cookie (57 g) </th>
    </tr>
    <tr>
      <th colspan="3"> Serving Per Container:12</th>
    </tr>
    <tr class="DarkBack">
      <th></th>
      <th>Amount Per Serving</th>
      <th>%Daily Value*</th>
    </tr>
    <tr>
      <td>Calories</td>
      <td>200</td>
      <td></td>
    </tr>
    <tr class="DarkBack">
      <td>Calories from Fat</td>
      <td>70</td>
      <td></td>
    </tr>
    <tr>
      <td>Total Fat</td>
      <td>7 g</td>
      <td>11%</td>
    </tr>
    <tr class="DarkBack">
      <td>Saturated Fat</td>
      <td>4 g</td>
      <td>20%</td>
    </tr>
    <tr>
      <td>Trans Fat</td>
      <td>0 g</td>
      <td></td>
    </tr>
    <tr class="DarkBack">
      <td>Cholesterol</td>
      <td>0 mg</td>
      <td>0%</td>
    </tr>
    <tr>
      <td>Sodium</td>
      <td>220 mg</td>
      <td>9%</td>
    </tr>
    <tr class="DarkBack">
      <td>Total Carbohydrate</td>
      <td>31 g</td>
      <td>10%</td>
    </tr>
    <tr>
      <td>Dietary Fiber</td>
      <td>5 g</td>
      <td>20%</td>
    </tr>
    <tr class="DarkBack">
      <td>Suger</td>
      <td>12 g</td>
      <td></td>
    </tr>
    <tr>
      <td>Suger Alcohol</td>
      <td>0 g</td>
      <td></td>
    </tr>
    <tr class="DarkBack">
      <td>Protein</td>
      <td>8 g</td>
      <td>8%</td>
    </tr>
    <tr>
      <td>Vitamin A</td>
      <td></td>
      <td>0%</td>
    </tr>
    <tr class="DarkBack">
      <td>Vitamin C</td>
      <td></td>
      <td>0%</td>
    </tr>
    <tr>
      <td>Calcium</td>
      <td></td>
      <td>2%</td>
    </tr>
    <tr class="DarkBack">
      <td>Iron</td>
      <td></td>
      <td>10%</td>
    </tr>
    <tr>
      <td colspan="3">*Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs</td>
    </tr>
    
    </table> 
    </div>
    </div>
    </div>
    </form>

    <div id="ReviewsSection" class="">

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12 col-lg-5">
            <img src="projectImages/man-eating-burger.png" height="500" width=100%>
          </div>

          <div class="col-xs-12 col-md-12 col-lg-7">

            <h4 class=" font-size font01" id="detailrevName"></h4>

            <h5 class=" font-size font01" id="detailravInfo"></h5>

            <p class=" font-size font01">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deseunt minima nemo! Accusatium dolorque ducimus ea eligendi facere inventore minima neque numquam officiis quam, repudiandae tempore temporibus? Dolore, itaque, reperhenderit?</p>

          </div>

          <div class="col-xs-12 col-md-12 col-lg-12">
            <button type="button" id="AddRevBtn" class="btn btn-warning" >Add your review</button>
          </div>
        </div>
      </div>




   
   
    
<div id="divLoad">
    <form action="php/review.php" method="post" id="hidding">

    <div id="addimage">
  <p class="font-size">Image</p>
   <p class="font-size"><input type="button" value="Choose File" class="fileButtom"> No file chosen</p>
    </div>

    <div id="1to5Review">
      <p class="font-size"><label for="volume">Rate the food</label></p>
      <input type="range" id="volume" name="volume"
         min="0" max="5" step="1" list = "tickmarks">
         <datalist id = "tickmarks">
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
           <option>5</option>
            
         </datalist>
    </div>
    
    <div id="NameField">
      <label for="name" class="font-size">Name: </label>
      <br>
      <br>
      <input type="text" id="name" value="" placeholder=" First and Last Name" class="nameField" name="name">
    </div>

    <div id="NameField">
      <label for="name" class="font-size">city: </label>
      <br>
      <br>
      <input type="text" id="name" value="" placeholder="city" class="nameField" name="city">
    </div>


    <div id="ReviewField">
      <div>
        <label for="review" class="font-size">Review:</label>
        <br>
        
      </div>
      <br>
      <div><label for="Review" id="error"></label></div>
      <textarea id="Review" rows="15" cols="33" class="ReviewField" placeholder=" Type your review here max 500 characters" onkeyup="lettercounter()" maxlength="500" name = "revArea"></textarea>
      <br>
      <label id="count"> 0/500</label>
    </div>

    <input type="hidden"  value="<?php echo $ID  ?>" name="mealID" id="hid">
    

    <div id="SubmitBtn"  >
    <input type="submit"  name= "submit" value="Submit" id="submitButten1 AddRevBtn" class="submitButten" > 
    </form>

    </div>

    

    
    
    
  

  </div>

  </div>
  
  
<!-- <form id="testingForm">
<input type="text" name="testingN" value=" <?php echo $_GET['ID']  ?>">
<button type="submit" name="testsubmit" >hi there </button>
</form> -->
<div id="testing">

</div>

  <footer>

<?php 
 include_once ('include/inc.footer.php');
?>
</footer>



  <script src="app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script>
  
  
  
  
  
  $(document).ready(function(){
$("#testingForm").submit(function(){
$.ajax({
url: "php/review.php",
type: "GET",
data: $("#testingForm").serialize(),
success: function(result, status){
alert(status);






$("#testing").html(result);












} });
return false;
}); 



// $('form').bind('submit', function () {
//           $.ajax({
//             type: 'post',
//             url: 'php/review.php',
//             data: $('form').serialize(),
//             success: function () {
//               alert('form was submitted');
//             }
//           });
//           return false;
//         });


});

  
  
  
  
  
  </script>
</body>
</html>