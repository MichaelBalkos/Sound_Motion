<!DOCTYPE html>

<?php session_start(); ?>
<?php $page = 'delete_confirm'; ?>

<?php 
include("header.php"); 


include("form.php");

include("productRowDisplay.php") ;





include('connection.php');
	
$ProdID = $_GET['product'];
$query = "select * from product2 where ProductID = $ProdID";	
$result = mysqli_query($connection, $query) or die('Query error: ' . mysql_error()); 		
$row = mysqli_fetch_array($result);	
	

$prodID = $row['ProductID'];	/*For update and delete links*/	
	
?>
	
<!--Popup box that displays a preview before deletion-->
<div onclick="document.getElementById('1').style.display='block'"></div>

<div id="1" class="d_Background">
	<form class="d_Content_Box" action="/action_page.php">
		<fieldset class="delete_Fieldset">
		
			<div class="DC_TitleDelete">	<!--Title-->
				<p class="DC_TitleP"> Are you sure you want to delete this record?</p>
			</div>
		
			<div class="DC_displayProduct">	<!--Product display area-->
				<div class="DC_dImageBox">
					<?php echo	'<img class="DC_dImage DC_dZoom" src="' . $row['ImageURL'] . '" alt="Earbuds" >'?>
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
			
			<div class="DC_Buttons">	<!--Delete and back buttons-->
				<?php
					echo '<a href="manage.php#Products" class="DC_Back_A">Back</a>';
					echo '<a href="delete.php?product='.$prodID.'#Products" class="DC_RealDelete_A">Delete Record</a>';	
				?>
			</div>
			
		</fieldset>
	</form>
</div>

</div>


<script src="Javascript/delete.js"></script>	<!--Provides functionality for the popup box open/close depending on what element is clicked on-->




<!--https://www.w3schools.com/colors/colors_picker.asp?-->





<?php include("footer.php") ?>	<!--footer-->

</body>
</html>











