


<?php
$DB = "life";
$USER = "root";
$PASS = "";
$HOST = "localhost";

$connect=mysqli_connect($HOST,$USER,$PASS,$DB);

if($connect){
	if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	
	
	$shamim = "INSERT INTO heart(f_name, l_name, email, password, cpassword) VALUES('$fname','$lname','$email','$password','$cpassword')";
	
		$res = mysqli_query($connect, $shamim);
	if($res){
			echo"
				<script>
				alert ('You are successfully registered');
				window.location.href='home.php';
				</script>";
	}else{
		echo "Something wrong!";
		}

	}

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login system</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div id="d">
		<img class="img" src="backup1.png" alt=""><br>
			<a href="#"><button class="btn1">Sign up</button></a>
			<a href="login.php"><button class="btn2">Log in</button></a>

		<form action="index.php" method="post">

		<input name="fname" type="text" id="form1" placeholder="First name" required>
		<input name="lname" type="text" id="form1" placeholder="Last name" required>
		
			<input name="email" type="email" id="form" placeholder="Email" required>
			<br>
			<input name="password" type="password" id="form" placeholder="Password" required>
			<br>
			<input name="cpassword" type="password" id="form" placeholder="Confirm password" required>
			<br><br>
			
			<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
           <label> I accept the <a class="term" href="#">Term of Use</a> & <a class="term" href="#">Privacy Policy.</a></label><br>
           
			<div class="btn"><p><input name="submit" type="submit" id="button" value="Sign up"></p></div>
			
			
			<div id="signin"><span>Already have an Account?<a href="login.php"><input name="back" type="button" class="sign" value="Log in"></a>
				</span>
			</div>
			
		</form>
		
		
		
	</div>
	
	
	
	
	
</body>
</html>