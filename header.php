<header>
<!-- tajuk sistem. Akan dipaparkan disebelah atas -->
<h1 class='w3-lobster'>Caught In 4K</h1>
<p>  <div class="w3-panel w3-card-4 w3-light-grey">
    <i class="w3-serif w3-xlarge w3-center">"Kamera terbaik Anda adalah kamera yang paling Anda kuasai."</i></p>
  </div></p>
</header>



<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: gray;
  border-radius: 30%;
  display: inline-block;
  transition: background-color 0.8s ease;
}

.active, .dot:hover {
  background-color: black;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 500px) {
  .prev, .next,.text {font-size: 100px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image (1).png" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image (4).jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 










<!DOCTYPE html>
<html>
  <head>
    <title>Aplikasi Caughtin4K</title>
    

     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=shadow-multiple">
<style> 
.w3-lobster {
  font-family: "Lobster", Sans-serif;
}
  </style>


<style>
         *{
            margin:0;
            padding:0;
         }

         body{
            background-color : #F8F7F6;
         }

         header{
            background-color : #D6C1AA;
            text-align:center;

         }
         footer{
          background-color: #D6C1AA;
          text-align:center;
          padding:30px;
          align-content:flex-end;
         }

         article{
            padding:15px;
            text-align: center;
         }

         h3{
            color: #986C4A;
         }

         table{
            background-color: #F8F7F6;
            width: 100%;
            border-collapse: collapse;
            border: 3px dashed #7A552A;

         }

         td{
            padding:15px;
         }
         tr:hover{
            background-color: #ECECEC;
            color:#7A552A;

         }

         nav{
            background-color: #F8F7F6;
            padding: 10px;
         }

         a{
            padding: 10px 25px;
            text-decoration:none;
            display:inline-block;
            border-radius: 8px;
         }

         input,
         select,
         button{
            padding: 6px;
            margin-top: 8px;
            border-radius: 8px;
         }

         input[type=submit]{
            background-color: #C69C6D;
            color: white;
         }
         input[type=submit]:hover{
            background-color: #BAABB0;
            color: black;
         }
      </style>
   </head>
   <body>

   








<nav>

<!-- Bahagian Menu Asas.
     Menu terbahagi kepada 3 jenis iaitu
     1. Menu staff dimana staff dapat akses semua perkara
     2. Menu pembeli dimana pembeli hanya boleh memilih barangan tetapi pembeli perlu login dahulu.
     3. Menu di laman utama - bagi pelawat yang tidak login pelawat tidak dapat memilih barangan 
     
-->

<?PHP 
# Menu staff : dipaparkan sekiranya staff telah login 
if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "staff")

{
  
  echo '
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <div class="w3-bar w3-border w3-card-4 w3-light-grey">
  <a href="index.php" class="w3-bar-item w3-button">Laman Utama</a>
  <a href="senarai-pembeli.php" class="w3-bar-item w3-button">Senarai Pembeli</a>
  <a href="senarai-staff.php" class="w3-bar-item w3-button">Senarai Staff</a>
  <a href="senarai-barang.php" class="w3-bar-item w3-button">Senarai Barang</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>';

}


#Menu pembeli : dipaparkan sekiranya pembeli telah login
else if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "pembeli")
{
  echo '
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <div class="w3-bar w3-border w3-card-4 w3-light-grey">
  <a href="index.php" class="w3-bar-item w3-button">Laman Utama</a>
  <a href="pembeli-pilih.php" class="w3-bar-item w3-button">Perbandingan Barang</a> 
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>';

} else {

    #menu Laman Utama : dipaparkan sekiranya staff atau pembeli tidak login
    echo '
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <div class="w3-bar w3-border w3-card-4 w3-light-grey">
    <a href="index.php" class="w3-bar-item w3-button">Laman Utama</a>
    <a href="pembeli-signup-borang.php" class="w3-bar-item w3-button">Pengguna Baru</a>
    <a href="pembeli-login-borang.php" class="w3-bar-item w3-button">Login Pengguna</a>
    <a href="staff-login-borang.php" class="w3-bar-item w3-button">Login Staff</a>';
}
?>


</nav>
<article>


