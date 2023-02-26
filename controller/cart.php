<?php


require_once('model/model_media/connection_database.php'); 


function cart(){

	if(isset($_SESSION['LOGGED_USER_PICTURE'])){
		$profilpicture=$_SESSION['LOGGED_USER_PICTURE'];
	  }

	$productsCart = array();
	$cumulationproductsCartDimensionsPrice = 0;
	
	if(isset($_SESSION['cart'])){
		$productsCart = $_SESSION['cart'];
	}

	require('view/cartview.php');
}

function delete_product_cart($name_product)
{
 
	$product_to_delete = (new Cart())->product_to_delete($_SESSION['cart'],$name_product);
	
	array_splice($_SESSION['cart'], $product_to_delete, 1);

	$cumulationproductsCartDimensionsPrice = 0;

	if(isset($_SESSION['LOGGED_USER_PICTURE'])){
		$profilpicture=$_SESSION['LOGGED_USER_PICTURE'];
	  }
	
	if (isset($_SESSION['cart'])){
		$productsCart = $_SESSION['cart'];
	}

	require('view/cartview.php'); 

}