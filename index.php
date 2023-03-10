<?php
  require_once('connection.php');

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>IPLANS</title>
</head>
<body>

  <!-----------------NAVIGATION BAR SECTION---------------->

      
    <nav style="background: lightgray">        
        <div class="menu">
            <ul>
                <li>
                   <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
               
                <li>
                    <a href="login.php">Login</a>
                </li>
            </ul>
        </div>    
        <div class="logo">
            <img src="img/iplans.png" alt="sea photo">
        </div>
    </nav>
       

  <!----------------HEADER SECTION------------------->

    <header>
        <div class="images-container">          
            <p>Hello,we are IPLANS</p>
            <h1>We answers "YES" to all your desires<br/>
                </h1>
           
            <a href="contact.html" class="btn-contact">CONTACT ME</a>
        </div>
    </header>

  <!---------------ABOUT US SECTION--------------->
    
    <div class="about-us">
        <h2>about us</h2>
        <div class="col-left"> 
            <img src="img/iplans4.jpg" alt="sea photo">
        </div>
        <div class="col-right">
            <h4>IPLANS</h4>
            <p>Hello to you reading this.We are an agency which was created in 2010
                we provide stylish and refreshing web application of our customers</p>
            <p>We ensure a safe and responsive programs for you</p>
            <a href="">HIRE US</a>
        </div>
    </div>
    
  <!-----------------ASSISTANCE SECTION--------------->
 <div class="assistance">
    <h2>assistance</h2>
    <div class="assistance-left">
            <i class="ion-model-s"></i>
            <h4>Transport ease</h4>
            <p>Our enterprise provide personal cars for does too far from an airport,or who would like much more space</p>
    </div>    
    <div class="assistance-center" >
            <i class="ion-social-chrome"></i>
            <h4>For any improvement</h4>
            <p>We provide a forum for those with comments or critics </p>
    </div>
    <div class="assistance-right">
            <i class="ion-ios-people"></i>
            <h4>personal assistance</h4>
            <p>For those in need of explanation, we provide for you an agent via online</p>
    </div>
 </div>

  <!-----------------MY PROJECTS SECTION--------------->

 <div class="my-projects">
    <h2>OTHER SERVICES</h2>
    <div class="project1">
        <div class="overlay">
            <a href="project1.html">IN CITY</a>
        </div> 
    </div>    
    <div class="project2">
        <div class="overlay">
            <a href="project2.html">NEAR THE BEACH</a>
        </div> 
    </div>
    <div class="project3">
        <div class="overlay">
            <a href="project3.html">ON MOUNTAIN</a>
        </div> 
    </div>
 </div>

 <!-----------------CONTACT SECTION--------------->

 <div class="contact-section">
    <h2>CONTACT US</h2>
    <div class="social-container">
       <p>Get in touch with us, or follow us on:</p>
       <div class="col-1">
           <div class="line1">
           <i class="ion-social-facebook"></i>
           <p>
                  <span class="text-bold">Facebook:</span> <br/>                                                            
                  <a href="https://www.facebook.com/raoul.white.526">raoulwhite</a>
           </p>
           </div>

           <div class="line1">
             <i class="ion-social-instagram"></i>
             <p>
                  <span class="text-bold"> Instagram:</span> <br/>
                  <a href="https://www.instagram.com/raoul.white.526/">raoul.white.526</a>
             </p>
           </div>
       </div>
       <div class="col-2">
           <div class="line1">
              <i class="ion-social-youtube"></i>
              <p>
                  <span class="text-bold">Youtube:</span> <br/>
                  <a href="">raoulwhite</a>
              </p>
           </div>
           <div class="line1">
              <i class="ion-social-twitter"></i>
              <p>
                  <span class="text-bold">Twitter:</span> <br/>
                  <a href="">raoulwhite</a>
              </p>
           </div>
       </div>
       <div class="col-3">
           <p>2019 Example Road</p>
           <p>Douala, Kotto</p>
           <p>Phone Number: 667469296</p>
           <p>Email:raoulwht@gmail.com</p>
       </div>
    </div>
 </div>

<!-----------------FOOTER SECTION--------------->
 
 <footer>
    <div class="footer-text">
        <p>
            &copy;2019, All Rights Reserved, Developed by Simon White<BR/>
            Made with <i class="ion-ios-heart"></i> in Douala Cameroon
        </p>    
    </div>   
    <div class="social">
        <a href="https://www.facebook.com/raoul.white.526"><i class="ion-social-facebook"></i></a>
        <a href="https://www.instagram.com/raoul.white.526/"><i class="ion-social-instagram"></i></a>
        <a href=""><i class="ion-social-youtube"></i></a>
        <a href=""><i class="ion-social-twitter"></i></a>
    </div>  
 </footer>

 <script
 src="https://code.jquery.com/jquery-3.4.1.min.js"
 integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
 crossorigin="anonymous"></script>
 <script src="js/main.js"></script>
</body>
</html>