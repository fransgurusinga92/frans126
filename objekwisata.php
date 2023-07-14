<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<body>

<h2 style="text-align:center">objek wisata</h2>

<div class="row">
  <div class="column">
  <img src="medan.webp" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="objek.webp" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="hewan.webp" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
   <div class="column">
  <img src="" alt="" class="" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div> 
  <div class="column">
  <img src="" alt="" class="" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="column">
  <img src="" alt="" class="" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
  <div class="column">
  <img src="" alt="" class="" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
  <div class="column">
  <img src="" alt="" class="" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
 
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 9</div>
      <img src="medan.webp" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 9</div>
      <img src="objek.webp" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 9</div>
      <img src="hewan.webp" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 9</div>
      <img src="" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5 / 9</div>
      <img src="" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 9</div>
      <img src="" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 / 9</div>
      <img src="" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">8 / 9</div>
      <img src="" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">9 / 9</div>
      <img src="" style="width:100%">
    </div>


    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="medan.webp" style="width:100%" onclick="currentSlide(1)" alt="<P>WISATA MEDAN ZOO
      <P>sebuah tempat wisata kebun binatang yang terdapat di simalingkar B<P>">
    </div>
    <div class="column">
      <img class="demo cursor" src="objek.webp" style="width:100%" onclick="currentSlide(2)" alt=>
    </div>
    <div class="column">
      <img class="demo cursor" src="hewan.webp" style="width:100%" onclick="currentSlide(3)" alt=></div>
    <div class="column">
      <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(4)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(5)" alt="">
    </div>
     <div class="column">
      <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(6)" alt=""></div>
  <div class="column">
      <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(7)" alt=" "></div>
  <div class="column">
      <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(8)" alt=""></div>
    <div class="column">
      <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(9)" alt="">
    </div>
</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</body>
</html>
