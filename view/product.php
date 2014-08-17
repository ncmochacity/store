<?php include 'header.php' ; ?>
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
    $image_path=$app_path . '../images/' . $image_filename;
    $image_alt='Image filename: ' . $image_filename;
;?>
<h1><?php echo $product_name; ?></h1>
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
<?php include 'footer.php'; ?>