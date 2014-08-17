<?php include 'header.php'; ?>

      
      <div class="large-5 columns" id="sidebar">
      	<h1>Links</h1>
      	<ul>
            <li>
                <a href="<?php echo $app_path; ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo $app_path; ?>">Admin</a>
            </li>
            <h3>Categories</h3>
            <?php foreach($categories as $category) : ?>
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

<?php include 'footer.php'; ?>
