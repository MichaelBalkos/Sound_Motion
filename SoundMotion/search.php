<!DOCTYPE html>

<!--Stage 1 'catalouge' page that displays products-->


<?php session_start(); ?>
<?php $page = 'search'; ?>	<!--declaring this page 'home' for the nav bar to work as an include and still retain buttons to be active after pressed-->

<?php include("header.php") ?>	<!--Header and nav-->






<?php




require_once('connection.php');

	$search = mysqli_real_escape_string($connection, $_POST['search']);	/*mysqli_real_escape_string escapes special characters for use in queries*/
	$query = "select * from product2 WHERE ProductName LIKE '$search%'";	/* LIKE $search% is looking for user input that starts with $search */
	$result = mysqli_query($connection, $query) or die('Query error: ' . mysql_error()); 
	$dollar = "$";
	  $rowcount=mysqli_num_rows($result);	/*Counting the number of rows to give feedback to users in case there are no results to display*/
?>


<div class="pHeadphones">

<div class="pBar">
	<div class="pHBar">
		<h1 class="pH1">Search - <?php echo $rowcount; ?> Results for <?php echo $search; ?></h1>
		<hr class="pHR">
	</div>	<!--end pHBar-->

<?php


if ($rowcount == "0") {	/*If there are 0 results, it will display a message telling the user there are no results.*/

	echo	'<div class="sResultBar">';
		echo	'<h1 class="sH1">Sorry! We could not find anything related to '.$search.'. &nbsp &nbsp </h1>';	/*&nbsp adding additional width to the auto width h1 tag*/
	echo	'</div>';	/*end of sResultBar2*/
	echo '<div class="sSpace">';	/*space to move the footer down a bit as no results make the footer position near the top*/
		echo	'</div>';	/*end of sSpace*/
		
} else {


echo '</div>';	/*end pBar*/


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
}

echo '</div>';	

mysqli_close($connection);

?>



</div>
</div>

<div class="sSpacer2">
</div>


<?php include("footer.php") ?>	<!--footer-->


</body>

</html>





