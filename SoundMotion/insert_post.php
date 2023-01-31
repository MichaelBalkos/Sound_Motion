



<?php $page = 'insert_post'; ?>	<!--Declaring this page as 'insert_post' in use for active nav buttons to work-->
<?php include("header.php") ?>	<!--header & navigation-->

<?php

require_once('connection.php');


	/*Using POST to hide data from URL instead of GET*/
	$name = mysqli_real_escape_string($connection, $_POST['name']);
	$price = mysqli_real_escape_string($connection, $_POST['price']);
	$type = mysqli_real_escape_string($connection, $_POST['type']);
	$image = 'Images/' . $_FILES["image"]["name"];		/*concatenates Images/ with the image name and file type. This is placed in the DB and accessed in the website.*/
	$caption = mysqli_real_escape_string($connection, $_POST['caption']);
	$description = mysqli_real_escape_string($connection, $_POST['description']);	/*mysqli_real_escape_string escapes special characters for use in queries*/
	
	
	
	/*inserts the data received from the form into the database*/
	$query="INSERT INTO product2 (ProductName, ProductPrice, ProductType, ImageURL, ProductCaption, ProductDescription) VALUES ('".$name."', '".$price."', '".$type."', '".$image."', '".$caption."', '".$description."')";


	
	
if (mysqli_query($connection, $query)) {


echo	'<div class="ipBlock">';	/*back to form section*/
	echo '<a href="login.php">';
		echo	'<div class="ipBlockColour">';
			echo	'<h1 class="ipH1">New record added successfully!</h1>';
			echo	'<h1 class="ipH1">Add another record? &nbsp &nbsp </h1>';
		echo '<div class="backToLoginButton">'; 
			echo	'<hp class="ipbtnT">Back to Form</p>';
			echo	'</div>';
		echo	'</div>';
	echo	"</a>";
echo	'</div>';


		move_uploaded_file($_FILES["image"]["tmp_name"], "Images/" . $_FILES["image"]["name"]);	/*move_uploaded_file places the file in a new location designated*/
} else {
		echo "SQL Query Error: " .mysqli_error($connection);
}



mysqli_close($connection);

?>






</body>
</html>













