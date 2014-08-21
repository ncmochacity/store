<?php
	function get_products_by_category($category_id){
		global $db;
		//use global to allow function to get access to the database
		$query="SELECT * FROM products 
		WHERE products.categoryID='$category_id'
		ORDER BY productID";

		$products=$db->query($query);
                return $products;
	}

	function get_product($product_id){
		global $db;
		$query="SELECT * FROM products 
				WHERE productID='$product_id'";
		$product=$db->query($query);
                $product=$product->fetch();
                return $product;
	}
	function delete_product($product_id){
		global $db;
		$query="DELETE FROM products 
				WHERE productID='$product_id'";
		$product=$db->query($query);
                $product=$product->fetch();
                return $product;
	}
	function add_product($category_id, $code, $name,$description, $price,$discount_percent){
		global $db;
		$query="INSERT INTO products 
				(productID,categoryID, productCode, productName,description, listPrice
                                ,discountPercent, dateAdded)
				VALUES 
					('$category_id','$code', '$name', '$description', $price','$disount_percent', NOW()";
                
		$db->exec($query);//returns the count after add statement
	}
        
        
?>