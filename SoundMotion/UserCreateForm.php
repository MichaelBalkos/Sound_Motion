
<!DOCTYPE html>


<?php $page = 'logout';	/*Declaring this page as 'products' in use for active nav buttons to work*/


include("header.php");	/*Header and nav*/


?>



<div class="UF_Login_Form">
	<form method="post" action="newUser.php" enctype="multipart/form-data">
		<div class="Login_Content">
		
			<div>	<!--Title-->
				<h1 class="UF_Login_Title">Create An Account</h1>
			</div>

			<div class="UF_Login_New_User">
				<p class="UF_L_Not_Member">Already a member?</p> <a href="login.php"><p class="UL_Login_Sign_Up">Login</p></a>
			</div>
			
			<div class="UF_Login_Text">	<!--Username-->
				<input type="text" name="username" class="UF_Login_Input_Fields" placeholder="Username or Email" required>
			</div>
			
			<div class="UF_Login_Text">	<!--Password-->
				<input type="text" name="password" class="UF_Login_Input_Fields" placeholder="Password" required>
			</div>
			
			<div class="UF_Login_Text">	<!--First Name-->
				<input type="text" name="FName" class="UF_Login_Input_Fields" placeholder="First Name" required>
			</div>
			
			<div class="UF_Login_Text">	<!--Last Nanem-->
				<input type="text" name="LName" class="UF_Login_Input_Fields" placeholder="Last Name" required>
			</div>
			
			<div class="Flag_UF_Login_Text">	<!--Flag-->
			<select class="Flag_User" name="flag">
				<option value="user">User</option>
				<option value="admin">Admin</option>
			</select>
			</div>
			
			<div class="UF_Login_Btn_Box">
				<input class="UF_Login_Btn" type="submit" name="AddUser" value="Create Account">
			</div>
			

			
			</div>
		</div>
	</form>
</div>


</body>
</html>