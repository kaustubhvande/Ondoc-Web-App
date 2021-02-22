<?php 
  session_start();
  $symptom=$_POST['srch'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ondocdb');
  $q="select * from disease where symptom='$symptom'";
  $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
?>

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
        <li><a class="active" href="search1.php">Search</a></li>
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

<div class="results">
    <?php   
        if ($num==1) {
        while($row = $result->fetch_assoc()) {
        echo "<table>
          <tr><td>Symptom : </td> 
            <td>" . $row["symptom"]. "</td>
          </tr> <tr>
            <td>Medicine: </td>
            <td>" . $row["medicine"]. "</td>
          </tr> 
          <tr>
            <td>Dosage:</td>  
            <td> 1 Tablet " . $row["dose"]." Times/Day </td>
          </tr> 
          <tr>
            <td>Duration: </td>
            <td>" . $row["duration"] . " Days</td>
          </tr>
        </table>";
    }
        }
        else{
        echo "<h2>No Records Found!</h2>";
        }
    ?> 
</div>

</body>
</html>