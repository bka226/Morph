
<?php
require_once('../EcommercePage/connector.php');
?>
<?php

$sql = "SELECT * FROM table_products WHERE featured = 1";
$featured = $db ->query($sql);

$sql1 = " SELECT * FROM categories WHERE parent_add = 0";
$parent = $db ->query($sql1);


?>


<!DOCTYPE html>
<html>
<head>
	<title> BK Online Shop</title>
	<link  rel="stylesheet"   href="css/bootstrap.min.css">
	<link  rel="stylesheet"   href="css/main.css"  >
	<meta  name = "viewport"  content="width=device-width, initial-scale=1, user-scaleable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js "> 
	</script>
	<script src="js/bootstrap.min.js"> </script>
</head>

<body>
	<nav class="navbar navbar-default  navbar-fixed-top" id = "navbar"> 
		<div class= "container"> 
			
		<a href="/EcommercePage/index.php" class=" col-xm-1 navbar-brand " id="text" >BK Online Shop </a>
		<?php 
			while($parentFM= mysqli_fetch_assoc($parent)) : 
		?>
		<?php
				$parentID = $parentFM['id'];
				
				$sql2 = " SELECT * FROM categories WHERE parent_add ='$parentID' ";
				$cquery = $db ->query($sql2);
		?>
		<ul class="nav navbar-nav">

		<li  class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text" > <?=$parentFM['category']; ?><span class="caret"></span></a>
			
				<ul class="dropdown-menu" role="menu" >

					<?php while($child = mysqli_fetch_assoc($cquery)) : ?>
					<li> <a href="#"> <?php echo $child['category']; ?> </a></li>
					<?php endwhile ?>
				</ul>
			
			</li>
		</ul>
<?php endwhile ?>


	</div>

	</nav>
	<!--  Image added here  -->
	<div class="img_responsive" id = backgroundImage >
		<div class="img_responsive" id="firstImage"> </div>
		<div class="img_responsive" id="secondImage"> </div>
	</div>

<!-- remove space and center the products -->
<div class="col-md-2"></div>

	<!-- Adding products -->


	<div class = "col-md-8" >
		<div class="row" >
			<h2 class="text-center"> Featured products </h2>
			<?php while($table_products = mysqli_fetch_assoc($featured)) : ?>
			<div class="col-md-4">
				<h4> <?=$table_products['title']; ?> </h4>
				<img src="<?=$table_products['image']; ?> " alt=" <?=$table_products['title']; ?>" id="images"/>
				<p class="list-price text-danger"> List Price:  <s> $<?=$table_products['price']; ?> </s></p>
				<p class="price "> Our price: $<?=$table_products['sale_price']; ?> </p>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target = "#details-1">Details </button>
		</div>	
	<?php endwhile ?>
</div>

<br/><br/>

<footer class="text-center" id="footer" > &copy; copyright 2017-2018 BK Online Shop </footer>

</div>

<?php
include 'details-modal-HolisterShirts.php';

?>

</body>

</html>