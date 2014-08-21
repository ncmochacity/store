
<?php
    $category_id=$product['categoryID'];
    $product_code=$product['productCode'];
    $product_name=$product['productName'];
    $description=$product['description'];
    $list_price=$product['listPrice'];
    $discount_percent=$product['discountPercent'];
    $description=add_tags($description);
    
    $discount_amount=round($list_price * ($discount_percent / 100), 2);
    $unit_price=$list_price - $discount_amount;
    $discount_percent=  number_format($discount_percent, 0);
    $discount_amount=number_format($discount_amount, 2);
    $unit_price=  number_format($unit_price, 2);
    $image_filename=$product_code . '.png';
    $image_path=$app_path . '/images/' . $image_filename;
    $image_alt='Image filename: ' . $image_filename;
;?>
<h1><?php echo $product_name; ?></h1>
<div class="row" >
    <div class="large-6 columns" id="watches">
        <p><img src="<?php echo $image_path; ?>"
                alt="<?php echo $image_alt; ?>" />
        </p>
    </div>
    <div class="large-6 columns" id="product">
        <p>List Price:
            <?php echo '$' . $list_price; ?>
        </p>
        <p>Discount:
            <?php echo $discount_percent . '%'; ?>
        </p>
        <p>Your Price:
            <?php echo '$' . $unit_price; ?>
            (You save
            <?php echo '$' . $discount_amount; ?>)
        </p>
        <form action="<?php echo $app_path . 'cart' ?>" method="post">
            <input type="hidden" name="action" value="add" />
            <input type="hidden" name="product_id"
                   value="<?php echo $product_id; ?>" />
            <p>Quantity: </p>
            <input type="text" name="quantity" value="1" size="2" />
            <input type="submit" value="Add to Cart" id="submit-btn" />
        </form>
        <h2>Description</h2>
        <?php echo $description; ?>
    
</div>