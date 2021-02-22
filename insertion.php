

<?php 
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'ondocdb');
$q="INSERT INTO user (username,email,password) values('$username','$email','$password')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up success!</title>
</head>
<body>

	<div>
		<h1>Sign Up Successful!</h1>	
	</div>

<?php 
	echo "Sign up Successful";
	sleep(2);
	header("Location: login.php");
?>


</body>
</html>

