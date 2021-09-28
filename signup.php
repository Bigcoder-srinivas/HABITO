<?php 

session_start();

?>




<?php include("header.php") ?>

<div class ="container-fluid jumbo_login">
	<div class="wrapper">
		<form action="signup.php" method="post" name="Signup_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Welcome Please Sign up to access habito</h3>
			  <hr class="colorgraph"><br>
              <label>Name</label>
			  <input type="text" class="form-control1 form-control inputlogintext" name="name" placeholder="Name" required="" autofocus="" />
			  <br>
			  <label>Email</label>
              <input type="text" class="form-control1 form-control inputlogintext" name="email" placeholder="e-mail" required="" autofocus="" />
			  <br>
              <label>Username</label>
			  <input type="text" class="form-control1 form-control inputlogintext" name="username" placeholder="Username" required="" autofocus="" />
			  <br>
              <label>Password</label>
			  <input type="password" class="form-control1 form-control inputloginpass" name="password" placeholder="Password" required=""/>     		  
			  <a href="forgetpassword.php">forgot password?</a>	
              <br>
              
			  
			  
			  <button class="btn btn-lg btn-primary btn-block"  name="signup" value="Login" type="Submit">Login</button>  			
		</form>		
	</div>	
</div>


<?php include("footer.php") ?>

<?php 

//make connection
$con = new mysqli('localhost','root','','habito');

if ($con->connect_error){
	die("connection error");
}
else{
	echo "";
}

if(isset($_POST['signup'])) {
     $user_email = $_POST['email'];
     $user_fullname = $_POST['name'];
     $user_name = $_POST['username'];
     $user_password = $_POST['password'];
     
	 
	 $encrypt = md5($user_password);
	 
	 $login_query = "INSERT INTO `admin` (`id`, `name`, `email`, `username`, `password`) VALUES (NULL,'$user_fullname','$user_email','$user_name','$user_password')";
	 
	 $run = mysqli_query($con,$login_query);
	  
	  if($run) { 
		   
		   $_SESSION['name'] = $user_name;
		   
		   echo "<script>window.open('login.php','_self')</script>";
	          }
	  else
  		  {
		  echo "<script>alert('Username or password is wrong')</script>";
	       }
	  
   }
	  ?>