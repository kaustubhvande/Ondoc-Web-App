<!DOCTYPE html>
<html>

<head>
	<title>OnDoc - The Online Doctor</title>
	<link rel="stylesheet" href="css/login.css">
  <link rel="shortcut icon" href="images/favicon.ico" />
	<script type="text/javascript">
		$('.message a').click(function(){
   		$('form').animate({
   		height: "toggle", opacity: "toggle"}, "slow");
   		}); 
   	</script>
</head>

<body>

<header>
    <div class="nav">
      <ul>
        <li><a class="active" href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
</header>



<img src="images\logo.png" alt="logo"></img>
<h1>OnDoc</h1>

<div class="login-page">
  	<div class="form">



    	<form class="login-form" action="validation.php" method="POST">
      	<input type="text" name="username" placeholder="username"/>
      	<input type="password" name="password" placeholder="password"/>
      	<button type="submit" formaction="validation.php" formmethod="POST">login</button>
      	<p class="message">Not registered? <a href="register.php">Create an account</a></p>
    	</form>

  	</div>
</div>

</body>
</html>



