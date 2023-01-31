


<?php $page = 'login'; ?>
<?php include("header.php") ?>

<?php

require_once('connection.php');


	/*Using POST to hide data from URL instead of GET*/
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	$flag = mysqli_real_escape_string($connection, $_POST['flag']);
	$FName = mysqli_real_escape_string($connection, $_POST['FName']);
	$LName = mysqli_real_escape_string($connection, $_POST['LName']);	/*mysqli_real_escape_string escapes special characters for use in queries*/
	$displayUserName = $username;
	

	/*inserts the data received from the form into the database*/
	$query="INSERT INTO users (username, password, firstname, lastname, flag) VALUES ('".$username."', '".$password."', '".$FName."', '".$LName."', '".$flag."')";


	
	
if (mysqli_query($connection, $query)) {


	

?>

<div class="UF_Login_Form">
	<form method="post" action="newUser.php" enctype="multipart/form-data">
		<div class="Login_Content">
		
			<div>	<!--Title-->
				<h1 class="UF_Login_Title">Account Created</h1>
			</div>

			<div class="UF_Login_New_User">
				<p class="UF_L_Not_Member">Welcome <?php echo $displayUserName ?>!</p></a>
			</div>
			
			<div class="UF_Login_Btn_Box">
				<a href="login.php" class="UF_Login_Btn">Login</a>
			</div>
			

			
			</div>
		</div>
	</form>
</div>

<?php
} else {
		echo "SQL Query Error: " .mysqli_error($connection);
}



mysqli_close($connection);

?>






</body>
</html>
