<?php include dirname(__FILE__) . './../../view/header.php'; ?>
<?php include dirname(__FILE__) . './../../view/sidebar_admin.php'; ?>
<div class="large-7 columns" id="list">
    <?php
       if(isset($product_id)){
           $heading_text='Edit Product';
       }
       else{
           $heading_text='Add Product';
       }
    ?>
   <h2>Product Manager - <?php echo $heading_text; ?></h2>
   <br />
   <form action="index.php" method="post" id="add_edit_product_form">
       <?php if(isset($product_id)) : ?>
           <input type="hidden" name="action" value="update_product" />
           <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
       <?php else: ?>
           <input type="hidden" name="action" value="add_product" />
       <?php endif; ?>
           <input type="hidden" name="category_id" value="<?php echo $product['categoryID']; ?>" />

           <label>Category: </label>
           <select name="category_id">
               <?php foreach($categories as $category) : ?>
               <option value="<?php echo $category['categoryID']; ?>"<?php echo $selected?>
                   <?php echo $category['categoryName']; ?>
               </option>
               <?php endforeach; ?>
           </select>
           <br />
        <label> Code: </label>
        <input type="input" name="code" value="<?php echo $product['productCode']; ?>" />
        <br />
        <label>Name: </label>
        <input type="input" name="name" value="<?php echo $product['productName']; ?>" />
        <br />
        <label>List Price: </label>
        <input type="input" name="price" value="<?php echo $product['listPrice']; ?>" />
        <br />
        <label>Description: </label>
        <textarea name="description" row="10">
            <?php echo $product['description']; ?>
        </textarea>>
        <br />
        <label>&nbsp;</label>
        <input type="submit" value="submit" id="submit-btn" />
    </form>
</div>
<?php include dirname(__FILE__) . './../../view/footer.php'; ?>