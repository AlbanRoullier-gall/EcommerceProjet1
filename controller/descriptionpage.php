<?php

require_once('model/model_media/connection_database.php'); 

function descriptionpage($product_name){
  
  if(isset($_SESSION['LOGGED_USER_PICTURE'])){
    $profilpicture=$_SESSION['LOGGED_USER_PICTURE'];
  }

  if (isset($product_name)){
    $productChecked = (new CatalogProducts())->select_product($product_name);
  }

	require('view/descriptionpageview.php'); 
}
