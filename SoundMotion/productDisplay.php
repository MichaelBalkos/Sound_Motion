


<?php 
	include('connection.php');
	
	$query = 'select * from product2';
	$result = mysqli_query($connection, $query) or die('Query error: ' . mysql_error()); 
	$dollar = "$";
	
	
echo '<div class="allEnclosures">';	/*Places the Enclosures centered, for 100% width*/
	
echo '<div class="restrictedEnclosure">';	/* Restricts only 4 enclosures to be displayed on each row */
	
	
	


	foreach ($result as $row) {
		
		$prodID = $row['ProductID'];	/*Obtaining the ProductID each loop of the foreach to allow for linking the product to a product page*/
		
		echo '<a href="display.php?product='.$prodID.'">';	/*Places the productID in the href link for the display page to obtain the value via GET*/


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
	echo "</a>";
}

echo '</div>';	/*restrictedEnclosure close*/
echo '</div>';	/*allEnclosures close*/



?>
	


