<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>OnDoc - The Online Doctor</title>
  
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  
</head>

<body>

    <header>
    <div class="nav">
      <ul>
        <li><a href="login.php">Login</a></li>
        <li><a class="active" href="register.php">Register</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    </header>

<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form action="insertion.php" method="POST"> 
    <input type="text" name="username" placeholder="Username" required/>
    <input type="text" name="email" placeholder="E-mail" />
    <input type="password" name="password" placeholder="Password" required/>
    <input type="submit" value="Sign me up" />
    </form>
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <a href="https://en-gb.facebook.com/login/"><button class="social-signin facebook">Log in with facebook</button></a>
    <a href="https://twitter.com/login?lang=en"><button class="social-signin twitter">Log in with Twitter</button></a>
    <a href="https://accounts.google.com/ServiceLogin/signinchooser?elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><button class="social-signin google">Log in with Google+</button></a>
  </div>
  <div class="or">OR</div>
</div>

</body>

</html>
