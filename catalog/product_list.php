<?php include '../view/header.php'; ?>
<div class="row" >
      <div class="large-7 columns" id="list">
        <h2><?php echo $category_name; ?></h2>
        <ul class="nav">
          <?php foreach ($products as $product) : ?>
          <li>
            <a href="?action=view_product&product_id=
              <?php echo $product['productID']; ?>">
              <?php echo $product['productName']; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="large-5 columns" id="sidebar">
        <h1>Links</h1>
      	
      	<ul>
            <li>
                <a href="<?php echo $app_path; ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo $app_path; ?>">Admin</a>
            </li>
            <h1>Categories</h1>
      		<?php foreach ($categories  as $category) : ?>
      		<li>
                <a href="<?php echo $app_path . 'catalog?action=list_products'
                        . '&amp;category_id=' . $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
                </li>
      	<?php endforeach; ?>
      	</ul>
      </div>
</div>
<?php include '../view/footer.php'; ?>
    

