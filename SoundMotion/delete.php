<!DOCTYPE html>

<?php session_start(); ?>
<?php $page = 'delete'; ?>	<!--define $page before nav is loaded-->

<?php 
include("header.php"); 


include("form.php");

include("productRowDisplay.php") ;





include('connection.php');
	
$ProdID = $_GET['product'];
$query = "delete from product2 where ProductID = $ProdID";	
$result = mysqli_query($connection, $query) or die('Query error: ' . mysql_error()); 			
	

?>

<!--Popup box that displays a preview before deletion-->
<div onclick="document.getElementById('1').style.display='block'"></div>

<div id="1" class="Rd_Background">
	<form class="Rd_Content_Box" action="/action_page.php">
		<fieldset class="Rd_delete_Fieldset">
		
			<div class="Rd_TitleDelete">	<!--Title-->
				<?php 
					if (mysqli_query($connection, $query)) {
						echo '<p class="Rd_TitleP"> Record successfully deleted.</p>';
					} else {
						echo "SQL Query Error: " .mysqli_error($connection);
					}
				?>
			</div>
			
			<div class="Rd_Button">	<!--Delete and back buttons-->
				<?php
					echo '<a href="manage.php#Products" class="RD_Close_A">Close</a>';	/* '#Products' is an anchor to productRowDisplay.php */
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


