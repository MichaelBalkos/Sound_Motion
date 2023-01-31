<!DOCTYPE html>


<?php session_start(); ?>


<?php $page = 'home'; ?>	<!--Declared as 'home' for active nav -->


<?php include("header.php") ?>	<!--Header and nav-->





<!--Large 20% off banner-->
<div class="shadow">
	<div class="banner">
		<a href="#"><img src="Images/Banner.png" alt="Banner" class="ImgBanner"></a>
	</div>
</div>
<!--End of banner-->





<!--product boxes-->

<?php include("productDisplay.php") ?>	



<!--footer-->

<?php include("footer.php") ?>	

</body>
</html>