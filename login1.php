<!DOCTYPE html>
<html>
<head>
	<title>GRMWEB</title>
	<link rel="stylesheet" type="text/css" href="css/street.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="check.php" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
					  <h5>Tel No</h5>
           		   		<input type="text" maxlength="10" require   class="input" name="tel">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" require class="input" name="pass">
            	   </div>
            	</div>
            	<a href="login2.php">Sign up</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/man.js"></script>
</body>
</html>
