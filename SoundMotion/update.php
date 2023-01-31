<!DOCTYPE html>

<?php session_start(); ?>
<?php $page = 'update'; ?>

<?php 

include("header.php"); 

include("form.php");

include("productRowDisplay.php");




require_once('connection.php');


if(!isset($_POST['update']))	{	/* '!' is a logical operator meaning 'not', not isset returns true if the value = null or not set. Its use could be eliminated by switching the contents of the if statement and else statement. */
	echo "Unauthorised access";

} else {
	
	/*Declaring variables sent though post*/
	$ProdID = mysqli_real_escape_string($connection, $_POST['ProductID']);		/*mysqli_real_escape_string escapes special characters for use in queries*/
	$name = mysqli_real_escape_string($connection, $_POST['name']);		
	$price = mysqli_real_escape_string($connection, $_POST['price']);
	$type = mysqli_real_escape_string($connection, $_POST['type']);
	$caption = mysqli_real_escape_string($connection, $_POST['caption']);
	$description = mysqli_real_escape_string($connection, $_POST['description']);	
	$old_IMG_URL = mysqli_real_escape_string($connection, $_POST['URLImage']);	
	
	
	
	/* Removes whitespace that was initially fixed in update_form.php but added here as previous records that may be updated in the future would still have whitespace.
		Whitespace breaks the type selection in the update form. */
	$T_name = trim($name);
	$T_price = trim($price);	/* Trim removes spaces or whitespace left and right of a string. */
	$T_type = trim($type);

	
	
	
	
	if($_FILES['image']['name']!="")	{	/*!="" checks if the 'input type="file"' sent a file with a name*/
		
		
		unlink($old_IMG_URL);	/* Unlink is deleting the previous uploaded image. Only deletes when a new image is uploaded.*/
		
		
		$image1 = 'Images/' . $_FILES["image"]["name"];
 
		$query = "UPDATE product2 SET ProductName = '$T_name',
								ProductPrice = '$T_price',
								ProductType = '$T_type',
								ProductCaption = '$caption',
								ProductDescription = '$description',
								ImageURL = '$image1'
								WHERE ProductID = '$ProdID'";	 

								
	} else {	/* Does not update ImageURL if the user did not select an image */

			$query = "UPDATE product2 SET ProductName = '$T_name',
								ProductPrice = '$T_price',
								ProductType = '$T_type',
								ProductCaption = '$caption',
								ProductDescription = '$description'
								WHERE ProductID = '$ProdID'";

	}
		
	

	if (mysqli_query($connection, $query)) {
		
		
		if($_FILES['image']['name']!=""){	/*!="" checks if the 'input type="file"' sent a file with a name*/
			move_uploaded_file($_FILES["image"]["tmp_name"], "Images/" . $_FILES["image"]["name"]);	
			
		}

	
		
		require_once('connection.php');	/*Opening new connection, essentially 'reloading' */
		
		$query = "select * from product2 where ProductID = $ProdID";	/*Product data is now displayed after being updated in the same php document*/
		$result = mysqli_query($connection, $query) or die('Query error: ' . mysql_error()); 		
		$row = mysqli_fetch_array($result);	
	
	
?>


		<!--Popup box that displays a preview after updating-->
		
		<div onclick="document.getElementById('1').style.display='block'"></div>

		<div id="1" class="d_Background">
			<form class="d_Content_Box" action="/action_page.php">
				<fieldset class="delete_Fieldset">
				
					<div class="DC_TitleDelete">	<!--Title-->
						<p class="DC_TitleP"> Product has been updated! Product preview: <?php echo $row['ProductName'] ?></p>
					</div>
				
					<div class="DC_displayProduct">	<!--Product display area-->
						<div class="DC_dImageBox">
							<img class="DC_dImage DC_dZoom" src="<?php echo $row['ImageURL'] ?>" alt="Earphones" >
						</div>
						<div class="DC_dInfo">
						
							<div class="DC_dTitle">
								<div class="DC_dTitleBar">
									<h1 class="DC_dHeadTitle"><?php echo $row['ProductName']?></h1>
									<hr class="DC_dBarHR">
								</div>
							</div>
							
							<div class="DC_dProdCaption">
								<div class="DC_dCaption">
									<p class="DC_dCaptionH1">"<?php echo $row['ProductCaption']?>"</p>
								</div>
							</div>
							
							<div class="DC_dDescriptionHead">
								<div class="DC_dDescription">
									<p class="DC_dTitleP">Product Description</p>
									<hr class="DC_dHRDescription">
								</div>
							</div>
							
							<div class="DC_dBodyTxt">
								<p class="DC_dDescriptionP"><?php echo $row['ProductDescription']?></p>
							</div>
							
							<div class="DC_dCartBtn">
								<hr class="DC_dcartHR">
								<div class="DC_dPrice">
									<h1 class="DC_dProdPrice">$<?php echo $row['ProductPrice']?></h1>
								</div>
								<div class="DC_dCartBtn2">
									<a href="#" onclick="return false;" class="DC_dCartB">Add To Cart</a>	<!--onclick return false to not do anything-->
								</div>
							</div>
						</div>
					</div>
					
					<div class="U_Button">	<!--Delete and back buttons-->
						<?php
							echo '<a href="manage.php" class="U_Close_A">close</a>';
						?>
					</div>
					
				</fieldset>
			</form>
		</div>

		
		<script src="Javascript/update.js"></script>	<!--Provides functionality for the popup box open/close depending on what element is clicked on-->

		
		
		
<?php

/* if and else constructs work even after php tags are closed and reopened.*/
	
	} else {
		echo "SQL Query Error: " .mysqli_error($connection);
		
}



}	/*!isset close*/

?>




<?php include("footer.php") ?>	<!--footer-->



</body>
</html>