<!DOCTYPE html>
<html>
<head>
	<title>OnDoc - The Online Doctor</title>
  <link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/about.css">

    <!-- Meta tags & title /-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="robots" content="all,index,follow" />

  <title>Speakers - Free Meet the Team Section Tutorial</title>
  <meta name="description" content="Speakers - Free Meet the Team Section Tutorial" />
  
  <!-- Stylesheets /-->
  <link rel="stylesheet" type="text/css" href="css/style.css" /> <!-- Main stylesheet /-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> <!-- Grid framework /-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> <!-- Open Sans /-->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'> <!-- PT Sans Narrow /-->
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> <!-- Font Awesome /-->
  
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" /> <!-- Favicon /-->

</head>
<body>

<header>
    <div class="nav">
      <ul>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a class="active" href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
</header>



  <!-- SPEAKERS SECTION --> 
  <section id="speakers">
    <h3>Our Team</h3> <!-- Section Title -->
    <div class="separator"></div>
    <div class="container">
      
      <!-- First Row of Speakers -->
      <div class="row1">
      
        <!-- Speaker 1
        <div class="col-md-3">
          <a href="#" class="member-profile">
            <div class="unhover_img">
            <img src="img/speaker-1.png" alt="" />
            </div>
            <div class="hover_img">
            <img src="img/speaker-1-hover.png" alt="" />
            </div>
            <span>Creative Director</span>
            <h4><span>Patrick </span> Simpson</h4>
          </a>  
          <ul>
            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-foursquare"></i></a></li>           
          </ul>
        </div>  -->
        
        
        <!-- Speaker 2 -->
        <div class="col-md-3">
          <a href="#" class="member-profile">
            <div class="unhover_img">
            <img src="img/speaker-4.jpg" alt="" />
            </div>
            <div class="hover_img">
            <img src="img/speaker-4-hover.jpg" alt="" />
            </div>
            <span>Website Developer</span>
            <h4><span>Deepak</span> Shende</h4>
          </a>          
          <ul>
            <li><a href="https://www.linkedin.com/in/deepakshende"  target="www.linkedin.com/in/deepakshende"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" target="www.kaggle.com/deepakshende"><i class="fa fa-Kaggle"></i></a></li>
            <li><a href="https://www.github.com/DeepakShende" target="_blanki"><i class="fa fa-github"></i></a></li>
          </ul>           
        </div>
        
      </div> <!-- End First Row -->
      <div class="clear"></div>
       
    </div>
  </section>
  <!-- //SPEAKERS SECTION --> 

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> <!-- Load jQuery -->

  <!-- jQuery Code for the View All Button -->
  <script>
    $(document).ready(function(){
      $(".fadeIn").click(function(){
      $("div.row2").fadeIn();
      $("button.fadeIn").hide();
      });
    });
  </script>


</body>
</html>