<?php
  require_once('connection.php');

?>
<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" type="text/css" href="css/tyle.css">
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- <link href="log.php">  -->
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
        <div class="loginbox">
		<img src="img/avatar.jpg" class="avatar">
		  <h1>Login Here</h1>
		  <form>
			<p>Username</p>
			<input type="text" name="" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="" placeholder="Enter Username">
			<input type="submit" name="" value="Login">
			<a href="registration.html">Don't have an account?</a>
		  </form>
        </div>
	</body>
    </head>
</html>