






<?php 

$L_Href = 'login.php';	/*Sets href to login.php by default for users and admins*/
$L_Name = 'login';		/*Sets text to Login by default for users and admins*/

if (isset($_SESSION['user'])) {	/*If User*/

	if($_SESSION['user']['flag'] == "admin") {	/* Is User, If Admin*/
?>

	<nav>

		<ul class="nav">

			<!--Logo-->
			<li class="Admin_navListLogo"><a href="index.php"><img src="Images/logo.png" alt="Logo" id="logo" ></a></li>

			<!--Welcome 'username'-->
			<li class="Admin_navList"><a class="Admin_navListA" href="#">Welcome <?php echo $_SESSION['user']['firstname'] ?></a></li>

			<!--Home-->
			<li class="navList"><a class="navListA <?php if($page=='home'){echo 'active';}?>" href="index.php">Home</a></li>

			<!--Products-->
			<li class="navList"><a class="navListA <?php if($page=='products'){echo 'active';} else if ($page=='display'){echo 'active';} ?>" href="products.php">Products</a></li>
			
				<?php	
					$L_Href = 'logout.php';	/*Changes Login button to logout */
					$L_Name = 'Logout';
				?>

			<!--Login/Logout-->	
			<li class="navList"><a class="navListA <?php if($page=='login'){echo 'active';} else if ($page=='logout'){echo 'active';} ?>" href="<?php echo $L_Href ?>"><?php echo $L_Name ?></a></li>		

			<!--Manage-->
			<li class="navList"><a class="navListA <?php if ($page=='manage'){echo 'active';} else if ($page=='insert_post'){echo 'active';} else if ($page=='delete_confirm'){echo 'active';} else if ($page=='delete'){echo 'active';} else if ($page=='update_form'){echo 'active';} else if ($page=='update'){echo 'active';} else {} ?>" href="manage.php">Manage</a></li>

			<!--Unused cart button-->
			<li class="navList"><a class="navListB <?php if($page=='cart'){echo 'active';}?>" href="#cart.php"><img src="Images/cart.png" alt="Cart" id="cartNav" ></a></li>

			<!--Search Bar-->
			<li class="navList">
				<form method="post" action="search.php">
					<input class="searchBar <?php if($page=='search'){echo 'active';}?>" type="text" name="search" placeholder="Search..">
				</form>
			</li>

		</ul>

	</nav>




	<?php
	} else {	/*User but not an admin*/
	?>



		<nav>

		<ul class="nav">

			<!--Logo-->
			<li class="User_navListLogo"><a href="index.php"><img src="Images/logo.png" alt="Logo" id="logo" ></a></li>

			<!--Welcome 'username'-->
			<li class="User_navList"><a class="User_navListA" href="#">Welcome <?php echo $_SESSION['user']['firstname'] ?></a></li>

			<!--Home-->
			<li class="navList"><a class="navListA <?php if($page=='home'){echo 'active';}?>" href="index.php">Home</a></li>

			<!--Products-->
			<li class="navList"><a class="navListA <?php if($page=='products'){echo 'active';} else if ($page=='display'){echo 'active';} ?>" href="products.php">Products</a></li>

				<?php	
					$L_Href = 'logout.php';	/*Changes Login button to logout */
					$L_Name = 'Logout';
				?>

			<!--Login/Logout-->	
			<li class="navList"><a class="navListA <?php if($page=='login'){echo 'active';} else if ($page=='logout'){echo 'active';} ?>" href="<?php echo $L_Href ?>"><?php echo $L_Name ?></a></li>		

			<!--Unused cart button-->
			<li class="navList"><a class="navListB <?php if($page=='cart'){echo 'active';}?>" href="#cart.php"><img src="Images/cart.png" alt="Cart" id="cartNav" ></a></li>

			<!--Search Bar-->
			<li class="navList">
				<form method="post" action="search.php">
					<input class="searchBar <?php if($page=='search'){echo 'active';}?>" type="text" name="search" placeholder="Search..">
				</form>
			</li>

		</ul>

	</nav>





	<?php
	}

} else {	/*Not a user*/
?>




	<nav>

		<ul class="nav">

			<!--Logo-->
			<li class="navListLogo"><a href="index.php"><img src="Images/logo.png" alt="Logo" id="logo" ></a></li>

			<!--Home-->
			<li class="navList"><a class="navListA <?php if($page=='home'){echo 'active';}?>" href="index.php">Home</a></li>

			<!--Products-->
			<li class="navList"><a class="navListA <?php if($page=='products'){echo 'active';} else if ($page=='display'){echo 'active';} ?>" href="products.php">Products</a></li>

			<!--Login/Logout-->	
			<li class="navList"><a class="navListA <?php if($page=='login'){echo 'active';} else if ($page=='logout'){echo 'active';} ?>" href="login.php">Login</a></li>		

			<!--Unused cart button-->
			<li class="navList"><a class="navListB <?php if($page=='cart'){echo 'active';}?>" href="#cart.php"><img src="Images/cart.png" alt="Cart" id="cartNav" ></a></li>

			<!--Search Bar-->
			<li class="navList">
				<form method="post" action="search.php">
					<input class="searchBar <?php if($page=='search'){echo 'active';}?>" type="text" name="search" placeholder="Search..">
				</form>
			</li>

		</ul>

	</nav>
	





<?php	
} /*Close If*/
	
?>



<!--End of Navigation-->






	

