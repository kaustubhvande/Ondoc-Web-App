<!DOCTYPE html>
<html>
<head>
  <title>OnDoc - The Online Doctor</title>
  <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>


<header>
    <div class="nav">
      <ul>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="about.php">About</a></li>
        <li><a class="active" href="contact.php">Contact</a></li>
      </ul>
    </div>
</header>


<div class="container">  
  <form id="contact" action="mailto:deepakshendeanil99@gmail.com" method="post" enctype="text/plain">
    <h3>OnDoc Contact Form</h3>
    <h4>Contact us</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>


</body>
</html>

