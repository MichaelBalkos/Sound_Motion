
<!DOCTYPE html>


<?php $page = 'login';	/*Declaring this page as 'products' in use for active nav buttons to work*/


include("header.php");	/*Header and nav*/


?>



<div class="Login_Form">
	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<div class="Login_Content">
		
			<div>	<!--Title-->
				<h1 class="Login_Title">Sound Motion Login</h1>
			</div>

			<div class="Login_Text">	<!--Username-->
				<input type="text" name="username" class="Login_Input_Fields" placeholder="Username" required>
			</div>
			
			<div class="Login_Text">	<!--Password-->
				<input type="text" name="password" class="Login_Input_Fields" placeholder="Password" required>
			</div>
			
			<div class="Login_Btn_Box">
				<input class="Login_Btn" type="submit" name="submit" value="Login">
			</div>
			
			<div class="Login_New_User">
			<p class="L_Not_Member">Not a member yet?</p> <a href="UserCreateForm.php"><p class="Login_Sign_Up">Sign up</p></a>
			</div>
			
			</div>
		</div>
	</form>
</div>



<?php 
$ErrorDismis = 'No';
require_once('connection.php');
		
if(isset($_POST['submit']))	{
	
	$username = mysqli_real_escape_string($connection, $_POST['username']);	/* Escaped string */
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	
	if(!empty($username) && !empty($password))	{
		
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($connection, $query);
		$row = mysqli_fetch_array($result);	
		

		
		if(mysqli_num_rows($result) == 1) {
			
			session_start();
			
			$user=array("firstname" => $row['firstname'], "lastname" => $row['lastname'],"flag" => $row['flag']);
			
			$_SESSION['user'] = $user;
			
			header('Location: index.php');
			
		} else {
			?>
			
			<div class="EL_Login_Form" id="Dismiss01">	<!--Closes the Error message with JS-->
				<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
					<div class="EL_Login_Content">
					
						<div onclick="myFunction()" class="EL_Dismiss_Btn">	<!--Closes the Error message with JS-->
							<p class="EL_Dismiss_P">Dismiss</p>
						</div>
		
						<div>	<!--Title-->
							<h1 class="EL_Login_Title">Incorrect Username or Password</h1>
						</div>
						
						<div>
							<p class="Try_Again_Login" >Please Try Again</p>
						</div>
						</div>
					</div>
				</form>
			</div>


			<?php
		}
		
		
		
	} else {
		?>
		
		<div class="EL_Login_Form" id="Dismiss01">	<!--Closes the Error message with JS-->
			<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="EL_Login_Content">
				
					<div onclick="myFunction()" class="EL_Dismiss_Btn">	<!--Closes the Error message with JS-->
						<p class="EL_Dismiss_P">Dismiss</p>
					</div>
	
					<div>	<!--Title-->
						<h1 class="EL_Login_Title">Incorrect Username or Password</h1>
					</div>
					
					<div>
						<p class="Try_Again_Login" >Please Try Again</p>
					</div>
					</div>
				</div>
			</form>
		</div>


		<?php
	}

	
}


?>







<script src="Javascript/dismiss.js"></script>





</body>
</html>