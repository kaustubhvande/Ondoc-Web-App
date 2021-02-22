<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>OnDoc - The Online Doctor</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
  
  
  
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/myscript.js"></script>
</head>
<body>

<header>
    <div class="nav">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a class="active" href="search.php">Search</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
</header>


<div class="wrap">
    <h2>Feeling Sick?</h2>
    <form action="search.php" method="POST">
      <div class="search">
        <input type="text" class="searchTerm" list="symptoms" name="srch" placeholder="Search your symptom..." id="suggest" />
      
        <datalist id="symptoms">
        
        </datalist>
      
        <button type="submit" name="submit" class="searchButton">
        <i class="fa fa-search">Go</i>
        </button>
      </div>
    </form>
</div>


</body>
</html>