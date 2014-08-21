<?php include ( 'header.php' ); ?>
<div class="row">
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
            <?php foreach ($categories as $category) : ?>
                <li>
                    <a href="<?php echo $app_path . 'admin/product?action=list_products'
            . '&amp;category_id=' . $category['categoryID'];
                ?>">
    <?php echo $category['categoryName']; ?>
                    </a>
                </li>
<?php endforeach; ?>
        </ul>
    </div>





