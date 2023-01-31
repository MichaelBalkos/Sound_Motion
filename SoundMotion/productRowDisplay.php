












<div class="allRowEnclosures" id="Products">
	
<div class="restrictedRowEnclosure">

<table class="pR_title">
	<tr>
		<th>Image</th>
		<th>Name</th>
		<th>Type</th>
		<th>Price</th>
		<th>Caption</th>
		<th>Description</th>
		<th>Update or Delete</th>
	</tr>
</table>

<hr class="pRHR">



<?php 

	include('connection.php');
	
	$query = 'select * from product2';
	$result = mysqli_query($connection, $query) or die('Query error: ' . mysql_error()); 
	$dollar = "$";

 echo '<table class="pR_Content">';

foreach ($result as $row) {
	
		$prodID = $row['ProductID'];	/*For update and delete links*/

	echo '<tr>';
	
		echo '<td>';
			echo	"<img src='".$row['ImageURL']."' class='pR_Img' alt='".$row['ProductName']."' />";
		echo '</td>';	
		
		echo '<td>' . $row['ProductName'] . '</td>';
		
		echo '<td>' . $row['ProductType'] . '</td>';
		
		echo '<td>'  . $dollar . $row['ProductPrice'] . '</td>';
		
		echo '<td>';	
				echo	'<textarea class="pR_Textarea" rows="6" cols="30" readonly>' .$row['ProductCaption'].'</textarea>';
		echo '</td>';
		
		echo '<td>';	/* Text area used as large text is easier to style, with the additional benefit of being able to scroll though all of the textareas content.*/
				echo	'<textarea class="pR_Textarea" rows="6" cols="50" readonly>' .$row['ProductDescription'].'</textarea>';				/* readonly attribute stops users from typing directly into the textarea */
		echo '</td>';
		
		echo '<td>';
			echo '<div class="pD_Buttons">';
				echo '<a href="update_form.php?product='.$prodID.'" class="pD_Update_A">Update</a>';		/*update button */		
				echo '<a href="delete_confirm.php?product='.$prodID.'#Products" class="pD_Delete_A">Delete</a>';	/*delete button */		/* '#Products' links to anchor on page */
			echo '</div>';
		echo '</td>';
		
	echo '</tr>';
		
}

	echo '</table>';
?>



</div>	<!--end ristricted-->
</div>	<!--end allEnclosure-->




	