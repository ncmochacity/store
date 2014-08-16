<?php include '../view/header.php'; ?>
<div class="row" >
      
      <div class="large-6 columns" id="watches">
      	<h1><?php echo $name; ?></h1>
      	<p>
      		<img src="<?php echo $image_filename; ?>" />
      	</p>
      </div>
      <div class="large-6 columns" id="product" >
      	<h1>Shopping Cart</h1>
      	<p><b>List Price: </b> $<?php echo $list_price; ?></p>
      	<p><b>Discount: </b> $<?php echo $discount_percent; ?></p>
      	<p><b>Your Price: </b> $<?php echo $unit_price; ?>
      	</p>
      	<p class="saving"><b>You save: </b> $<?php echo $discount_amount; ?>
      	</p>
      	<form action="<?php echo '../cart' ?>"method="post">
      		<input type="hidden" name="action" value="add" />
      		<input type="hidden" name="product_id"
      			value="<?php echo $product_id; ?>" />
      		<p class="quant">Quantity</p>
      		<input type="text" name="quantity" value="1" size="2" />
      		<input type="submit" value="Add to Cart" />
      	</form>
      </div>
</div>
<?php include '../view/footer.php'; ?>
