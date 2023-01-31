<!DOCTYPE html>

<?php session_start(); ?>
<?php $page = 'update_form'; ?>	<!--Declaring this page as 'login' in use for active nav buttons to work-->
<?php include("header.php");




include('connection.php');

$ProdID = $_GET['product'];
$query = "select * from product2 where ProductID = $ProdID";	
$result = mysqli_query($connection, $query) or die('Query error: ' . mysql_error()); 

$row = mysqli_fetch_array($result);	


$ID_Product = $ProdID;
	
$image_Full = $row['ImageURL'];

?>




<section   class="UF_formSec">
<form method="post" action="update.php" enctype="multipart/form-data">	<!--enctype multipart/form data allows files to be uploaded though a form, in this case, it would be the product image going though POST.-->
	<fieldset   class="UF_form_Fieldset">	<!--creates a box around the form elements-->
	
		<input type="hidden" name="ProductID" value="<?php echo $ID_Product ?>" /> <!--Hidden input sending product id to update.php-->
	
		<input type="hidden" name="URLImage" value="<?php echo $image_Full ?>" />	<!--Sending the old image url to delete in update.php-->
	
		<div   class="UF_formTitle">	<!--Title-->
			<h1   class="UF_formTitleH1">Update Record: <?php echo $row['ProductName']?></h1>
		</div>
		<div   class="UF_formRow">	<!--Name-->
			<label  class="UF_formWidth">Product Name:</label>
			<input type="text" name="name" value="<?php echo $row['ProductName']?>" required>
			<hr>
		</div>
		
		<div  class="UF_formRow">	<!--Price-->
			<label  class="UF_formWidth">Product Price:</label>
			<input type="text" name="price" value="<?php echo $row['ProductPrice']?>" required>
			<hr>
		</div>

		<div  class="UF_formRow">	<!--Category-->
			<label  class="UF_formWidth">Product Category:</label>
			<select name="type">
			
				<?php	/* Uses an if statement to not duplicate drop down options when updating a record */
					if ( $row['ProductType']=='Earphones') {
							echo '<option value="'.$row['ProductType'].'">'.$row['ProductType'].'</option>';
							echo '<option value="Headphones">Headphones</option>';
							echo '<option value="Speaker">Speaker</option>';
				
					} else if ( $row['ProductType']=='Headphones'){					/*If product type is headphones, display product type, earphones and speaker */
							echo '<option value="'.$row['ProductType'].'">'.$row['ProductType'].'</option>';
							echo '<option value="Earphones">Earphones</option>';
							echo '<option value="Speaker">Speaker</option>';
							
					} else {
							echo '<option value="'.$row['ProductType'].'">'.$row['ProductType'].'</option>';
							echo '<option value="Headphones">Headphones</option>';
							echo '<option value="Earphones">Earphones</option>';
					}
				?>
				
			</select>
			<hr>
			
		</div>
		<div  class="UF_formRow">	<!--Image-->
			<label  class="UF_formWidth">Product Image:</label>
			<input type="file" name="image" class="UF_Browse"> 
				<?php
					$Image_Full = $row['ImageURL'];
					$Image_Name = substr($Image_Full, 7); /*substr returns the portion of string specified by the start and length parameters, in this case, i've removed the 'Image/' portion concatenated previously */
					echo	'<textarea class="UF_pR_Textarea" rows="1" cols="30" readonly>Current Image: '  .$Image_Name. '</textarea>';
				?>
			<hr class="F_HR_IMG">
		</div>
		
		<div  class="UF_formRow">	<!--Caption-->
			<label  class="UF_formWidth">Product Caption:</label>
			<textarea name="caption" class="UF_txtBox" rows="5" cols="75" placeholder="A short caption of the product..." required><?php echo $row['ProductCaption']?></textarea> <!--placeholder adds text that disappears once the user types in the box-->
		</div>

		<div  class="UF_formRow">	<!--Description-->
			<label  class="UF_formWidth">Product Description:</label>
			<textarea name="description" class="UF_txtBox" rows="12" cols="75" placeholder="A description of the product that will be displayed on the product page..." required><?php echo $row['ProductDescription']?></textarea>
		</div>
		
		<div  class="UF_formRow">
			<a href="manage.php" class="UF_Cancel_I">Cancel Update</a>
			<input  class="UF_Submit_I" type="submit" name="update" value="Update Product">
		</div>

	</fieldset>
</form>
</section>




<?php include("productRowDisplay.php") ?>	<!--productRowDisplay include-->



<?php include("footer.php") ?>	<!--footer-->

</body>
</html>











