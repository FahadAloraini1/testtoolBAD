
    

function showReview() {
  var displayReview = document.getElementById("hidding");
    displayReview.style.transition = "right 500ms";
    displayReview.removeAttribute("hidden");
}

function lettercounter() {
  let count = document.getElementById("Review").value.length;
  document.getElementById("error").innerHTML = "";
if(count <= 500){
  document.getElementById("count").innerHTML=count + "/500";
}}

function errormassage() {
  var check = document.getElementById("Review").value.length;
  if (check <= 0) {
    document.getElementById("error").innerHTML = "Please type your review";
  }
  var x = document.getElementById("name").value.length;
  if (x <= 0)
  var changeName = document.getElementById("name").value = "costumer";
}

function AddToCartB(){
var C = document.getElementById("Cart_number").innerHTML;
C++;
document.getElementById("Cart_number").innerHTML = C;
}
function AddToCartS(){
var C = document.getElementById("Cart_number").innerHTML;
var CB =  document.getElementById("number_of_items").value;
C = Number(CB) + Number(C);
document.getElementById("Cart_number").innerHTML = C;

document.getElementById("number_of_items").value = 1;

}
function OrderNow(){
document.getElementById("Cart_number").innerHTML = 0;
}
function INC(){
var C = document.getElementById("number_of_items").value;
C++;
 document.getElementById("number_of_items").value = C;
}
function DEC(){
var C = document.getElementById("number_of_items").value;
if(C>1){
C--;
 document.getElementById("number_of_items").value = C;
}
}


$( document ).ready(function() {
  $("#ReviewsSection").hide();
  $("#hidding").hide();
});
$("#DescBtn").click(function(){
 $("#ReviewsSection").hide();
 $("#DecsSection").slideToggle("slow");
});


$("#ReviewsBtn").click(function(){
$("#DecsSection").hide();
 $("#ReviewsSection").slideToggle("slow");
});

$("#AddRevBtn").click(function(){
 $("#hidding").slideToggle("slow");
});


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


document.getElementById('cartB2B').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});






document.querySelector('.close').addEventListener("click", function() {

	document.querySelector('.bg-modal').style.display = "none";
});
document.querySelector('.closeB').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});

var addToCartButtons = document.getElementsByClassName('cartINFO')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
       button.addEventListener('click', addToCartClicked(product[i]))
        
        
    }
    function addToCartClicked(p) {
   var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')

var cartItems = document.getElementsByClassName('cart-row')

    var cartRowContents = `
        <div class="cart-item cart-column">
            
            <span class="cart-item-title">${p}</span>
        </div>
        <span class="cart-price cart-column">${p}</span>
        <div class="cart-quantity cart-column">
            
        </div>`
    cartRow.innerHTML = cartRowContents

    cartItems.innerHTML = cartRow
   
}


function ReDirict(tmp){

  window.location.replace("detail.php?ID=5");


}





