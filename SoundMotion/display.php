<!DOCTYPE html>

<!--Stage 1 'catalouge' page that displays products-->


<?php session_start(); ?>
<?php $page = 'display';	/*Declaring this page as 'products' in use for active nav buttons to work*/


include("header.php");	/*Header and nav*/


	



include('connection.php');
	
$ProdID = $_GET['product'];
$query = "select * from product2 where ProductID = $ProdID";	
$result = mysqli_query($connection, $query) or die('Query error: ' . mysql_error()); 		
$row = mysqli_fetch_array($result);	
	

?>



<div class="displayProduct">
	
	<div class="dImageBox">
		<?php echo	'<img class="dImage dZoom" src="' . $row['ImageURL'] . '" alt="Earbuds" >'?>
	</div>

	<div class="dInfo">
	
		<div class="dTitle">
			<div class="dTitleBar">
				<h1 class="dHeadTitle"><?php echo $row['ProductName']?></h1>
				<hr class="dBarHR">
			</div>
		</div>
		
		<div class="dProdCaption">
			<div class="dCaption">
				<p class="dCaptionH1">"<?php echo $row['ProductCaption']?>"</p>
			</div>
		</div>
		
		<div class="dDescriptionHead">
			<div class="dDescription">
				<p class="dTitleP">Product Description</p>
				<hr class="dHRDescription">
			</div>
		</div>
		
		<div class="dBodyTxt">
			<p class="dDescriptionP"><?php echo $row['ProductDescription']?></p>
		</div>
		
		<div class="dCartBtn">
			<hr class="dcartHR">
			<div class="dPrice">
				<h1 class="dProdPrice">$<?php echo $row['ProductPrice']?></h1>
			</div>
			<div class="dCartBtn2">
				<a href="#" class="dCartB">Add To Cart</a>
			</div>
		</div>

	</div>
	
</div>

<div class="displayBottom">
	
	<div class="spacer">
		
	</div>
	
	<div class="spacer2">
	
	</div>
	
</div>




<?php include("footer.php") ?>	<!--footer-->

</body>
</html>


















