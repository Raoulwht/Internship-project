<?php
  require_once("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
	<link rel="stylesheet" href="css/image.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
     <!-- <link href="cont.php"> -->
	<title>contact</title>
</head>
<body>
       <nav style="background: lightgray">        
        <div class="menu">
            <ul>
                <li>
                   <a href="home.php">Home</a>
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
          <h1>Say hello</h1>
     	<h2>We are always ready to serve</h2>
     </div>
     <div class="contact-form">
     	<form id="contact-form" method="post" action="">
     		<input type="text" name="name" class="form-control" placeholder="Your Name" required><br>
     		<input type="email" name="email" class="form-control" placeholder="Your Email" required><br>

     		<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>

     		<input type="submit" class="form-control submit" value="SEND MESSAGE">
     	</form>
     </div>
</body>
</html>
