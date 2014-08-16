<?php
	require('../model/database.php');
	require('../model/product_db.php');
	require('../model/category_db.php');

	if(isset($_POST['action'])){
		$action=$_POST['action'];
	}
	else if(isset($_GET['action'])){
		$action=$_GET['action'];
	}
	else{
		$action="list_products";
	}
	if($action == 'list_products'){
		$category_id=$_GET['category_id'];
		if(empty($category_id)){
			$category_id=1;
		}
		$categories=get_categories();
		$category_name=get_category_name($category_id);
		$products=get_products_by_category($category_id);

		include('product_list.php');
	}
	else if($action == 'view_product'){
		$categories=get_categories();
		$product_id=$_GET['product_id'];
		$product=get_product($product_id);

		$code=$product['productCode'];
		$name=$product['productName'];
		$list_price=$product['listPrice'];

		$discount_percent=19;
		$discount_amount=round($list_price * ($discount_percent/100), 2);
		$unit_price=$list_price - $discount_amount;

		$discount_amount=number_format($discount_amount,2);
		$unit_price=number_format($unit_price,2);

		$image_filename='../images/' . $code . '.png';
		$image_alt='Image: ' . $code . '.png';

		include('product_view.php');
	}
?>