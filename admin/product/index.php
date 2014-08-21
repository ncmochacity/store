<?php

require_once('../../utility/main.php');
require_once('../../utility/tags.php');
require_once('../../model/database.php');
require_once('../../model/product_db.php');
require_once('../../model/category_db.php');

global $categories, $products;
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_products';
}
$action = strtolower($action);
switch ($action) {
    case 'list_products':
        $category_id = 1;
        if (isset($_GET['category_id'])) {
            $category_id = $_GET['category_id'];
        }
        $category_name = get_category_name($category_id);
        $categories = get_categories();
        $products = get_products_by_category($category_id);
        include('../../catalog/product_list.php');
        break;
    case 'view_product':
        $categories = get_categories();
        $product_id =$_GET['product_id'];
        $product = get_product($product_id);
        include('product_view.php');
        break;
    case 'delete_product':
        $category_id = $_POST['category_id'];
        $product_id = $_POST['product_id'];
        delete_product($product_id);
        header("Location: .?category_id=$category_id");
        break;

    case 'show_add_edit_form':
        if (isset($_GET['product_id'])) {
            $product_id = $_GET['product_id'];
        } else {
            $product_id = $_POST['product_id'];
        }
        $product = get_product($product_id);
        $categories = get_categories();
        include('product_add_edit.php');
        break;
    case 'add_product':
        $category_id = $_POST['category_id'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        if (empty($code) || empty($name) || empty($description) || empty($price)) {
            $error = 'Invalid product data. Check all fields. ';
            include('../../error/error.php');
        } else {
            $categories = get_categories();
            $product_id = add_product($category_id, $code, $name, $description, $price);
            $product = get_product($product_id);
            include('product_view.php');
        }
        break;
    case 'update_product':
        $product_id = $_POST['product_id'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];
        if (empty($code) || empty($name) || empty($description) || empty($price)) {
            $error = 'Invalid product data';
            include('../../error/error.php');
        } else {
            $categories = get_categories();
        }
        break;
}
?>

