





<!DOCTYPE html>

<?php session_start(); ?>
<?php $page = 'logout';	/*Declaring this page as 'products' in use for active nav buttons to work*/


$_SESSION = array();	/* Empty the session array */

session_unset();
session_destroy();

include("header.php");	/*Header and nav*/


?>



<div class="Login_Form">
	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<div class="L_Login_Content">
		
			<div>	<!--Title-->
				<h1 class="L_Login_Title">You have been logged out</h1>
			</div>
	
			<div class="L_Login_Btn_Box">
			
				<a href="index.php" class="L_Home_Login_Btn">Back To Home</a>
				<a href="login.php" class="L_Login_Again_Btn">Login Again</a>
			</div>
			

			
			</div>
		</div>
	</form>
</div>











</body>
</html>