<?php include dirname(__FILE__) . './../../view/header.php'; ?>
        
             <?php include dirname(__FILE__) . './../../view/product.php'; ?>
             
             <div class="row">
                 <form action="" method="post">
                     <input type="hidden" name="action" value="Show_add_edit_form">
                     <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>" />
                     <input type="hidden" name="category_id" value="<?php echo $product['categoryID']; ?>" />
                     <input type="submit" value="Edit Product" id="submit-newbtn">
                 </form>
                 <form action="" method="post">
                     <input type="hidden" name="action" value="delete_product">
                     <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>" />
                     <input type="hidden" name="category_id" value="<?php echo $product['categoryID']; ?>" />
                     <input type="submit" value="Delete Product" id="submit-newbtn">
                 </form>
             </div>
<?php include dirname(__FILE__) . './../../view/footer.php'; ?>