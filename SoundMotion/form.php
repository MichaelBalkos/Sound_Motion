

<section class="formSec">
<form method="post" action="insert_post.php" enctype="multipart/form-data">	<!--enctype multipart/form data allows files to be uploaded though a form, in this case, it would be the product image going though POST.-->
	<fieldset class="form_Fieldset">	<!--creates a box around the form elements-->
	
		<div class="formTitle">	<!--Title-->
			<h1 class="formTitleH1">Enter A New Product Record</h1>
		</div>
	
		<div class="formRow">	<!--Name-->
			<label class="formWidth">Product Name:</label>
			<input type="text" name="name" required>
			<hr>
		</div>
		
		<div class="formRow">	<!--Price-->
			<label class="formWidth">Product Price:</label>
			<input type="text" name="price" required>
			<hr>
		</div>

		<div class="formRow">	<!--Category-->
			<label class="formWidth">Product Category:</label>
			<select name="type">
				<option value="Earphones">Earphones</option>
				<option value="Headphones">Headphones</option>
				<option value="Speaker">Speaker</option>
			</select>
			<hr>
		</div>
		
		<div class="formRow">	<!--Image-->
			<label class="formWidth">Product Image:</label>
			<input type="file" name="image" required>
			<hr>
		</div>
		
		<div class="formRow">	<!--Caption-->
			<label class="formWidth">Product Caption:</label>
			<textarea name="caption" class="txtBox" rows="5" cols="75" placeholder="A short caption of the product..." required></textarea> <!--placeholder adds text that disappears once the user types in the box-->
		</div>

		<div class="formRow">	<!--Description-->
			<label class="formWidth">Product Description:</label>
			<textarea name="description" class="txtBox" rows="12" cols="75" placeholder="A description of the product that will be displayed on the product page..." required></textarea>
		</div>
		
		<div class="formRow">
			<input class="subBtn" type="submit" value="Add Product">
		</div>

	</fieldset>
</form>
</section>




















