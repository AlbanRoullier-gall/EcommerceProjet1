<?php
// controllers/homepage.php
require('model/model_media/connection_database.php'); 
require('libraries/JSON/sponsor.php');
require('libraries/XML/currency.php');

function homepage() {
  $products = (new CatalogProducts)::$poductsArray;
  $categories = (new CatalogCategories)::$categoriesArray;
  $projects = (new CatalogProjects)::$projectsArray;

  if(isset($_SESSION['LOGGED_USER'])){
    $profilpicture= unserialize($_SESSION['LOGGED_USER'])->link_image_profil_user;
  }

  require("view/homepageview.php");
}

function homepage_product_searched($input_search){
  $products = (new CatalogProducts)::$poductsArray;
  $categories = (new CatalogCategories)::$categoriesArray;
  $projects = (new CatalogProjects)::$projectsArray;
  

  if(isset($_SESSION['LOGGED_USER'])){
    $profilpicture= unserialize($_SESSION['LOGGED_USER'])->link_image_profil_user;
  }
    

  $catalog_product = new CatalogProducts();
  $productSearched = $catalog_product->select_product($input_search);
  
  require("view/homepageview.php");
}