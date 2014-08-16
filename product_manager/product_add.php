<?php include '../view/header.php'; ?>
<div class="row">
	<div class="large-12 columns" id="add">
		<h1>Add Products</h1>
			<form action="index.php" method="post" id="add_product_form">
				<input type="hidden" name="action" value="add_product" />
				<label>Category: </label>
				<select name="category_id">
					<?php foreach ($categories as $category) :?>
						<option value="<?php echo $category['categoryID']; ?>">
							<?php echo $category['categoryName']; ?>
						</option>
					<?php endforeach; ?>
				</select>
				<br />
				  <label>Product ID: </label>
				  <input type="text" name="product_id" />
				  <label>Code: </label>
		          <input type="text" name="code" />
		          <br />
		          <label>Name: </label>
		          <input type="text" name="name" />
		          <br />
		          <label>List Price: </label>
		          <input type="text" name="price" />
		          <br />
		          <label>&nbsp;</label>
		          <input type="submit" value="Add Product" />
		    </form>
			<p class="add"><a href="index.php?action=list_products">View Products </a></p>
	</div>
</div>
<?php include '../view/footer.php'; ?>