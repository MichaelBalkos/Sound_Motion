<!DOCTYPE html>


<?php session_start(); ?>

<?php if (isset($_SESSION['user'])) {	?>		<!--Stops anyone from accessing if they do not have a sessoion that is set with the array user-->
<?php if($_SESSION['user']['flag'] == "admin") { ?>	<!--Stops users from typing in the manage.php in the url and getting access without being an admin-->


<?php $page = 'manage'; ?>	<!--Declaring this page as 'login' in use for active nav buttons to work-->
<?php include("header.php") ?>	<!--header & navigation-->












<?php include("form.php") ?>	<!--form include-->




<?php include("productRowDisplay.php") ?>	<!--productRowDisplay include-->






<?php include("footer.php") ?>	<!--footer-->


<?php 		/* <-- stops anyone that is not specifically a member that has the admin flag */
} else {
		?>
	<head>
		<meta charset="UTF-8">	<!--UTF-8 Needed to display ascii shugging dude and emojis below, only displays the 'head' tag if the user is unauthorised-->
	</head>
	
	<p>Unauthorised Access: You Need To Be An Administrator To Access This Page ¯\_(ツ)_/¯ 😰 😱</p>
	<?php
}

} else {
	?>
	<head>
		<meta charset="UTF-8">	<!--UTF-8 Needed to display ascii shugging dude and emojis below, only displays the 'head' tag if the user is unauthorised-->
	</head>
	
	<p>Unauthorised Access: ¯\_(ツ)_/¯ 😰 😱</p>
	<?php
}
?>




</body>
</html>