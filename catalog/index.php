<?php
    require_once('../utility/main.php');
    require_once('../utility/tags.php');
    require_once('../model/database.php');
    require_once('../model/product_db.php');
    require_once('../model/category_db.php');

    if(isset($_POST['action'])){
        $action=$_POST['action'];
    }
    else if (isset($_GET['action'])){
        $action=$_GET['action'];
    }
    else{
        $action='list_products';
    }
    switch ($action){
        case 'list_products':
            $category_id=$_GET['category_id'];
            $products=  get_products_by_category($category_id);
            $current_category=  get_category_name($category_id);
            $categories=  get_categories();
            $products=  get_products_by_category($category_id);
            include('product_list.php');
            break;
        case 'view_product':
            $categories=  get_categories();
            $product_id=$_GET['product_id'];
            $product=  get_product($product_id);
            include('product_view.php');
            break;
    }

