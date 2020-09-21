
 <?php
  $conn = mysqli_connect("localhost", "root", "", "life");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $user_name = $_POST['user_name'];
	  $password = $_POST['password'];
	  
   $sql = "select * from heart where email= '$user_name' and password = '$password'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   
   if($count ==1){
	  echo"
				<script>
				alert ('You are successfully registered');
				window.location.href='home.php';
				</script>";
   }
   else{
	   echo "login failed";
   }
   
  }

?>