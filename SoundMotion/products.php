<!DOCTYPE html>

<?php session_start(); ?>
<?php $page = 'products'; ?>	<!--Declaring this page as 'products' in use for active nav buttons to work-->
<?php include("header.php") ?>	<!--header & navigation-->



<div class="pHeadphones">

<div class="pBar">
	<div class="pHBar">
		<h1 class="pH1">Headphones - Over Ear</h1>
		<hr class="pHR">
	</div>	<!--end pHBar-->
</div>	<!--end pBar-->


<?php

include('connection.php');
	
$query = 'select * from product2 WHERE ProductType="Headphones"';	/* Selecting only products listed as headphones */
$result = mysqli_query($connection, $query) or die('Query error: ' . mysql_error()); 
$dollar = "$";


echo '<div class="PREnclosure">';	/* Restricts only 4 enclosures to be displayed on each row */


	foreach ($result as $row) {
		
		$prodID = $row['ProductID'];	/*Obtaining the ProductID each loop of the foreach to allow for linking the product to a product page*/
		
echo '<a href="display.php?product='.$prodID.'">';		/*Places the productID in the href link for the display page to obtain the value via GET*/

	echo	'<div class="enclosure">';
		echo	'<div class="heading">';
			echo	'<h1 class="head">' .$row['ProductName'].'</h1>';		
		echo	'</div>';
		
		echo	'<div class="zoom">';
			echo	"<img src='".$row['ImageURL']."' alt='".$row['ProductName']."' />";
		echo	'</div>';
	
		echo	'<div class="break">';
			echo	'<hr class="hrLine">';
		echo	'</div>';
	
		echo	'<div class="productDesc">';
			echo	'<p>' .$row['ProductCaption'].'</p>';
		echo	'</div>';	
	
		echo	'<div class="prodPrice">';
			echo	'<h2 class="pPrice">' .$dollar .$row['ProductPrice'].'</h2>';
		echo	'</div>';

		echo	'<div class="prodCart">';
			echo '<a href="display.php?product='.$prodID.'" class="prodDisplay_Close_A">More Info</a>';
		echo	'</div>';

	echo '</div>';	/*enclosure close*/
echo	"</a>";
}

echo '</div>';	/*restrictedEnclosure close*/

?>

</div>





<div class="PEarphones">

<div class="pBar">
	<div class="pHBar">
		<h1 class="pH1">Earphones - In Ear</h1>
		<hr class="pHR">
	</div>	<!--end pHBar-->
</div>	<!--end pBar-->


<?php

include('connection.php');
	
$query = 'select * from product2 WHERE ProductType="Earphones"';	/* Selecting only products listed as earphones */
$result = mysqli_query($connection, $query) or die('Query error: ' . mysql_error()); 
$dollar = "$";


echo '<div class="PREnclosure">';	/* Restricts only 4 enclosures to be displayed on each row */


	foreach ($result as $row) {
		
		$prodID = $row['ProductID'];	/*Obtaining the ProductID each loop of the foreach to allow for linking the product to a product page*/
		
		echo '<a href="display.php?product='.$prodID.'">';		/*Places the productID in the href link for the display page to obtain the value via GET*/


	echo	'<div class="enclosure">';
		echo	'<div class="heading">';
			echo	'<h1 class="head">' .$row['ProductName'].'</h1>';		
		echo	'</div>';
		
		echo	'<div class="zoom">';
			echo	"<img src='".$row['ImageURL']."' alt='".$row['ProductName']."' />";
		echo	'</div>';
	
		echo	'<div class="break">';
			echo	'<hr class="hrLine">';
		echo	'</div>';
	
		echo	'<div class="productDesc">';
			echo	'<p>' .$row['ProductCaption'].'</p>';
		echo	'</div>';	
	
		echo	'<div class="prodPrice">';
			echo	'<h2 class="pPrice">' .$dollar .$row['ProductPrice'].'</h2>';
		echo	'</div>';

		echo	'<div class="prodCart">';
			echo '<a href="display.php?product='.$prodID.'" class="prodDisplay_Close_A">More Info</a>';
		echo	'</div>';

	echo '</div>';	/*enclosure close*/
echo	"</a>";
}

echo '</div>';	/*restrictedEnclosure close*/

?>


</div>





<div class="PSpeaker">

<div class="pBar">
	<div class="pHBar">
		<h1 class="pH1">Speakers - Bluetooth</h1>
		<hr class="pHR">
	</div>	<!--end pHBar-->
</div>	<!--end pBar-->


<?php

include('connection.php');
	
$query = 'select * from product2 WHERE ProductType="Speaker"';	/* Selecting only products listed as speaker */
$result = mysqli_query($connection, $query) or die('Query error: ' . mysql_error()); 
$dollar = "$";


echo '<div class="PREnclosure">';	/* Restricts only 4 enclosures to be displayed on each row */


	foreach ($result as $row) {
		
		$prodID = $row['ProductID'];	/*Obtaining the ProductID each loop of the foreach to allow for linking the product to a product page*/
		
		echo '<a href="display.php?product='.$prodID.'">';		/*Places the productID in the href link for the display page to obtain the value via GET*/


	echo	'<div class="enclosure">';
		echo	'<div class="heading">';
			echo	'<h1 class="head">' .$row['ProductName'].'</h1>';		
		echo	'</div>';
		
		echo	'<div class="zoom">';
			echo	"<img src='".$row['ImageURL']."' alt='".$row['ProductName']."' />";
		echo	'</div>';
	
		echo	'<div class="break">';
			echo	'<hr class="hrLine">';
		echo	'</div>';
	
		echo	'<div class="productDesc">';
			echo	'<p>' .$row['ProductCaption'].'</p>';
		echo	'</div>';	
	
		echo	'<div class="prodPrice">';
			echo	'<h2 class="pPrice">' .$dollar .$row['ProductPrice'].'</h2>';
		echo	'</div>';

		echo	'<div class="prodCart">';
			echo '<a href="display.php?product='.$prodID.'" class="prodDisplay_Close_A">More Info</a>';
		echo	'</div>';

	echo '</div>';	/*enclosure close*/
echo	"</a>";
}

echo '</div>';	/*restrictedEnclosure close*/

?>


</div>


















<?php include("footer.php") ?>	<!--footer-->

</body>

</html>






















