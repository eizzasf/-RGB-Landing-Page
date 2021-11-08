<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    
    <title>RGB Camera Rental</title>
</head>
<style>
* { box-sizing: border-box;
    text-decoration: none;
    list-style: none;
    padding: 0;
    margin: 0; }

#myBtn {
  position: fixed;
  bottom: 20px;
  right: 90px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px; }

#myBtn:hover {
  background-color: #555; }

body {
  margin:0;
  font-family: "century gothic";
  background: white; } 

h1, h2, h3 {
  font-family: "century gothic"; }

  h2 {font-size: 1.5vw;}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px;}


/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 65px;
  height: 550px; }

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;}

.column3 {
  float: left;
  width: 33.33%;
  height: 350px;
  padding: 10px;
  text-align: center;  }

/* Clear floats after the columns */
.row3:after {
  content: "";
  display: table;
  clear: both;}

.logo {
  width: 20%; height: auto; margin-left: 150px; float: left;}

nav {
  background-color: white;
  height: 120px;
  width: 100%;}

nav ul {
  float: right;
  margin-right: 20px;
  padding-right: 5%;}

nav ul li {
  display: inline-block;
  line-height: 80px;
  margin: 20px 12px;}

nav ul li a {
  font-size: 17px;
  text-transform: uppercase;}

a.active, a:hover {
  background-color: #1E8449;
  transition: .5s;}

.checkbtn {
  font-size: 30px;
  color: black;
  float: right;
  line-height: 80px;
  margin: 40px 70px;
  display: none;}

#check {
  display: none;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
  opacity: 0.9;}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;}

/* Add padding to container elements */
.container {
  padding: 16px;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background: #ccc;
  padding-top: 50px;}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; 
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: black;}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;}

/*mobile*/
@media screen and (max-width: 768px) {
  .navbar ul li a {
    font-size: 14px;  }
}

/*mobile*/
  @media screen and (max-width: 576px) {
/* slideshow */
    .prev, .next,.text {font-size: 11px}

    body {
      background-image: url("pic/bg.jpg");
      background-color: #cccccc;
      background-position: center; /* Center the image */
      background-repeat: no-repeat; /* Do not repeat the image */
      background-size: cover; /* Resize the background image to cover the entire container */
      overflow-x: hidden;    }

    .column {
    width: 100%;
    display: block; }

    .column3 {
    width: 100%;
    display: block;}

    .checkbtn {
      display: block;}

    ul {
      position: absolute;
      display: flex;
      width: 100%;
      height: 100vh;
      background-color: white;
      top: 100px;
      left: -100%;
      text-align: center;
      transition: all .3s;}

    nav ul {
      display: block;}

    nav ul li {
      display: block;
      margin: 10px 0;
      line-height: 30px;
      height: 10vh;}

    nav ul li a {
      font-size: 20px;
      padding: 0px;}

    a:hover, a.active {
      background: green;
      color: whitesmoke;}

    #check:checked ~ ul {
      left: 0;}

    .logo {
      position: fixed;
      width: 50%; height: auto;
      margin-top: 20px;
      margin-left: 15px;}

    div {
      width: 100%;
      height: auto;}

    .mySlides {display: none}
    img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;}

.prev, .next { /* Next & previous buttons */
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


.next { /* Position the "next button" to the right */
  right: 0;
  border-radius: 3px 0 0 3px;}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8); }

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;}

.active, .dot:hover {
  background-color: #717171;}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
  .cancelbtn, .signupbtn {
     width: 100%;}
}
</style>
</head>
<body>

    <!-- Navigation -->
<nav>
  <input type="checkbox" id="check">
  <label for="check" class="checkbtn">
  <i class="fas fa-bars"></i>
  </label>
    <img src="..\rgb\pic\logoRGB2.jpg" alt="Logo RGB" class="logo" style="position: relative;"></img>
    <ul>
        <li><a href="#home" class=" w3-padding-large w3-mobile w3-text-black w3-hover-text-white" ><i class="fa fa-id-badge" ></i> HOME</a></li>
        <li><a href="#about" class="w3-padding-large w3-mobile w3-text-black  w3-hover-text-white"><i class="fa fa-commenting"></i> ABOUT</a></li>
        <li><a href="#demo" class="w3-padding-large w3-mobile w3-text-black  w3-hover-text-white"><i class="fas fa-forward"></i> DEMO</a></li>
        <li><a href="#packages" class="w3-padding-large w3-mobile w3-text-black  w3-hover-text-white"><i class="	fas fa-star"></i> PACKAGES</a></li>
        <li><a href="#contact" class="w3-padding-large w3-mobile w3-text-black w3-hover-text-white "><i class="fa fa-fw fa-user"></i> CONTACT</a></li>
        <li><a href="#signup" class="active w3-red w3-padding-large w3-mobile w3-text-white w3-hover-text-black  w3-border-red" onclick="document.getElementById('signup').style.display='block'">SIGN UP</a></li>
        <li><a href="#login" class="active w3-blue w3-padding-large w3-mobile w3-text-white w3-hover-text-black w3-border-blue" onclick="document.getElementById('login').style.display='block'"> LOGIN</a></li>
     </ul>
    </nav>

<!---Login-->
<div class="w3-container">

  <div id="login" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <i style='font-size:150px' class="w3-circle w3-margin-top fas" >&#xf2bd;</i> 
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('login').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>
    </div>
  </div>
</div>

<!---Sign up--->
<div id="signup" class="modal">
  <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('signup');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!--content / column-->
<div class="w3-content" style="max-width: 1900px; height: auto">

    <div class="row">
<!---First section-->
  <div class="column w3-blue" id="home">
    <h1 style="font-size: 45px; color: khaki; padding-left: 5%; font-family: century gothic;">Capture your happiest moment with us.</h1>
    <p style=" font-weight: bold; color: black; padding-left: 5%; font-family: century gothic;">We provide Photography, Videography services for all occasions.      
    <br><br><br><br>
       <center><link><b><a href="#" style="color: yellow;"> Sign Up</a></b></link> for more details about the packages. <br> *Terms and Conditions apply.</center></p>
  </div>
  <div class="column w3-blue">
<center><img src="pic/img1.jpg" alt="img1" style="width: 80%; height: auto;"></center>
  </div>
    </div>


  <!---ABOUT section-->
  <div class="w3-content w3-white w3-center" style="max-width:800px" id="about"> 
        <center><h1 style="font-weight: bold; text-shadow: 0px 2px 4px grey; margin: 5%;">ABOUT</h1></center>
  </div>
        <div class="row"> 

  <div class="column w3-white" style="height: auto">
  <center><img src="pic/logoRGB2.jpg" alt="img1" style="width: 50%; height: auto; "></center>
    </div>
  <div class="column w3-white" style="height: auto">
      <h3 style="font-weight: bold; color: grey; text-align: left"> RGB COLOURS PRODUCTION</h3>
      <br><br>
      <p style="word-break: normal;">It was founded in 2005. The company offered a variety of occasions such as wedding ceremonies, convocations, liveMCP, VIP events, and so on.
          It is officially based in Penang, but the shooting location will be determined by the client's request.
          After a decade, many freelancers are growing up the number in this field. RGB's owner considers new ways to provide a new service, camera and accessory rental.
          This will primarily focus on the Penang area. Cameras, video cameras, action cameras, and, most recently, drones are available for rent.
          We also sell used drones, and the availability of new drones is likely to rely on supplier stock.</p>
  </div>
  <div class="column w3-white" style="height: auto">
    <center><img src="pic/dronepenang.jpg" alt="sofiRGB" style="width: 50%; height: auto;"></center>
  </div>
    <div class="column w3-white" style=" height: auto">
      <h3 style="font-weight: bold; color: grey;  text-align: left">SOFIRGB</h3>
      <p style="word-break: normal;">Muhamad Sofi b. Hamid is the founder. But, also well-known as SofiRGB. My journey as a photographer was filled with wonderful experiences that required a strong passion and spirit. I founded this company in 2005 with a few employees who will assist the company with editing, shooting, and travel as needed.
      After a decade, I tried to spread my wings and try the latest product, the Drone. I'm not just doing it for fun; with Drone, I'll be determined to keep the company running, especially during pandemic Covid-19. Anyone interested in seeing the drone's video can find me on Facebook or YouTube! Thank you very much. <br><br> Best regards, Sofi. </p>
    </div><br>
    </div>

<!--Demo section-->
<div class="w3-container w3-green w3-padding-48" id="demo">
  <center><h1 style="font-weight: bold;text-shadow: 0px 2px 4px black;">DEMO VIDEO</h1></center><br>
  <center><iframe src="https://player.vimeo.com/video/36964357?h=82fb4d6b29" width="100%" height="50%" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
      <p style="color: black"><a href="https://vimeo.com/36964357"> <br> Idah (Penang) &amp; Dr. Andri (Jakarta) <br> Wedding Highlight Part 1</a> 
      from <a href="https://vimeo.com/rgbvideo">RGB Colours Production</a> on <a href="https://vimeo.com">Vimeo</a>.</p></center>
</div>


<!--PACKAGES section-->
<div class="w3-container" style="background-color: #FB1A35;" id="packages">
    <center><h1 style="font-weight: bold; text-shadow: 0px 2px 4px grey; margin: 2%">PACKAGES</h1></center>
    <center><p style="color: white"><b><a href="#" style="color: black">Sign Up</a></b> for more details about the packages and price. Also, directly contact through <br> 
    <a href="https://wa.link/3e8typ" style="color: black">WhatsApp</a>
    or <a href="https://www.facebook.com/RGBColoursProduction" style="color: black">Facebook</a> for fast respond. 
    <br><br><b><i>*Terms and Conditions are apply.</b></i></p><br><br><br></center>

<div class="w3-container" style="background-color: #fff;">
    <center><h1 style="font-weight: bold; background: #E9E9E9">THE CAMERA</h1><br><br>
    <h2>Rent today. Discount for the next day! Hurry up!</h2></center>
  <br><br><br>

    <center><div class="slideshow-container" style="background-color: white; width: 50vw">

            <div class="mySlides fade">
              <div class="numbertext">1 / 2</div>
              <img src="pic/nikon1.jpg" style="width:50%">
              <br><br><div class="text">NIKON DSLR</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 2</div>
              <img src="pic/cameras.jpg" style="width:50%">
              <br><br><div class="text">THE CAMERAS FOR RENT</div>
            </div>
              <br><br>
            <a class="prev" style="font-size: 30px;" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" style="font-size: 30px;" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
            </div></center>

            <script>
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
     </script>`
</div>

<br><br>
<div class="w3-container" style="background-color: #fff;">    
<center><h1 style="font-weight: bold; background: #E9E9E9">THE DRONE</h1>
    <h2>The Drone is available for rental service. <br> Our client can request for the Drone Pilot shooting <br>
  if needed.</h2>
<p>*Terms and Conditions are applicable.</p></center>
  <br><br><br>

  <style>
    .column-img {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row-img::after {
  content: "";
  clear: both;
  display: table;
}
    </style>

<div class="row-img">
  <div class="column-img">
    <img src="pic/drone1.jpg" alt="d1" style="width:100%; height: auto;">
    <br><br><br>
    <center><p> A client rent the DJI drone.</p></center>
  </div>
  <div class="column-img">
    <img src="pic/drone4.jpg" alt="d4" style="width:100%; height: auto;">
    <br><br><br>
    <center><p> A DJI Drone used for shooting.</p></center>
  </div>
  <div class="column-img">
    <img src="pic/drone3.jpg" alt="d3" style="width:100%; height: auto;">
    <br><br><br>
    <center><p> Drone shooting in Perak</p></center>
  </div>
</div>
<br><br><br>
</div>
    <br><br><br>

    <center><h1 style="font-weight: bold;">CAMERA RENTAL</h1></center><br><br>
</div>

<div class="row3">
  <div class="column3" style="background-color: #FB1A35; border-right: 1px solid #ccc">
  <i class="fa fa-camera" style="font-size:48px;  color: white"></i>
    <h2 style="color: yellow; font-weight: bold">CAMERA PHOTO</h2>
          <p>∎ Sony Camera</p>
          <p>∎ Nikon Camera</p>
  </div>

  <div class="column3" style="background-color: #FB1A35; border-right: 1px solid #ccc">
  <i class="fas fa-video" style="font-size:48px; color: white"></i>
    <h2 style="color: yellow; font-weight: bold">VIDEO</h2>
      <p>∎ Panasonic AC90 Videocam</p>
      <br>
      <p><b>Accessories</b></p>
      <br>
          <p>∎ Manfrontto Tripod</p>
          <p>∎ Manfrontto Fluidhead</p> 
  </div>

  <div class="column3" style="background-color: #FB1A35;">
  <i class="fas fa-photo-video" style="font-size:48px; color: white"></i>
    <h2 style="color: yellow; font-weight: bold">ACTION CAMERA</h2>
      <p>∎ Xiomi Yi Action Camera</p>
          <p>∎ GoPro Hero5</p>
          <p>∎ GoPro Hero8</p>
    </div>
  </div>
</div><br><br>
<!---CONTACT section-->
    <div class="w3-container w3-white w3-padding-32">
      <center><h1 style="font-weight: bold;text-shadow: 0px 2px 4px grey; border: 4px double #ccc; border-radius: 25px; background-color: whitesmoke">CONTACT</h1>
      <br><br>
      <h2>The client can contact us directly through WhatsApp or Facebook for fast respond. <br>
    And, you may Sign Up to find out which services that might be interested. <br> 
  We're glad to have you and give our best for our beloved clients. <br>
Thank you! x </h2></center><br><br>
      <center><img src="pic/w.png" alt="whatsapp" style="width: 2vw; height: auto"><a href="https://wa.link/3e8typ" style="color: black"> SofiRGB (+6019-4804698)</a>
    | <img src="pic/facebook.png" alt="whatsapp" style="width: 2.5vw; height: auto"><a href="https://www.facebook.com/sofirgb" style="color: black"> Facebook</a> | 
        <img src="pic/f1.png" alt="whatsapp" style="width: 2.5vw; height: auto"><a href="https://www.facebook.com/RGBColoursProduction" style="color: black"> RGB's Page</a></center>
         <div style="border-bottom: 1px dashed #ccc; padding-top: 7%"></div>
             <br><br>

  <!--footer-->
      <center><img src="pic/logoRGB2.jpg" alt="whatsapp" style="width: 20vw; height: auto"></center>
      <p style="text-align: center; color: grey; padding-top: 2%">© Copyright 2021 by Norizzati Sofi. Matric No. 263870 | RGB Colours Production</p>
  </div>
 <!--top button-->
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


</body>
</html>