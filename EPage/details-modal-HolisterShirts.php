
<?php
require_once('../EcommercePage/connector.php');
?>
<?php

$sql = "SELECT * FROM table_products WHERE featured = 1";
$featured = $db ->query($sql);

?>
<?php
			
?>
<div class="modal fade details-1"   id="details-1" role="dialog" tableindex="-1" aria-labelledby="details-1" arai-hidden= "true" >
	<?php //if (mysqli_fetch_assoc($sql1) = "details-1" ) : ?>
<div class="modal-dialog modal-lg " >
	<div class="modal-content">
		<?php while($table_products = mysqli_fetch_assoc($featured)) : ?>
			
			
	  <div class="modal-header" >
		<button  class="close" type="button" data-dismiss= "modal" aria-label= "Close" >

			<span aria-hidden="true"> &times;</span>
			</button>
			
				<h4 class="modal-title text-center"> <?=$table_products['title']; ?> </h4>
			</div>
			 <div class="modal-body">
			 	<div class="container-fluid">
			    <div class="row">
			    	<div class="col-sm-6">
			    		<div class="center-block">
			    			<img src="<?=$table_products['image']; ?> " alt="<?=$table_products['title'];?>" class="details img-responsive"/>
			    		</div>
			    	</div>
			    	<div class="col-sm-6">
			    		<h4>Details</h4>
			    		<p> <?=$table_products['description']; ?></p>
			    		<hr />
			    		<p>price: $<?=$table_products['sale_price']; ?></p>
			    		<p>Brand: Holister</p>
			    		<form action="" method="post"  >
			    			<div class="form-group">
			    				<div class="col-xs-3">
			    					<label for="quantity" id="quantity-label"> Quantity: </label>
			    					<input type="text" class="form-control" id= "quantity"/>
			    				</div><br/><br/><br/>
			    				<div class="form-group">
			    					<label for="size" > Size:</label>
			    					<select name="size"  id="size" class="form-control" >
			    						<option value="" >Not Selected </option>
			    						<option value="<?=$table_products['size']; ?>" ><?=$table_products['size']; ?></option>
			    					</select>
								</div>
			    			</div>

			    		</form>
			    	</div>
			    </div>
			</div>
		</div>
		<div class="modal-footer">
		<button class="btn btn-default"   onclick="closeModal()" > Close</button>
		<button class="btn btn-warning" type="submit"  ><span class="glyphicon glyphicon-shopping-cart" > Add to Shopping Cart</span></button>
	</div>
<?php endwhile ?>
	
</div>
</div>

<script type="text/javascript">
// as user clicks close, use this function	
function closeModal(){
	jQuery('#details-1').modal('hide');
}










</script>