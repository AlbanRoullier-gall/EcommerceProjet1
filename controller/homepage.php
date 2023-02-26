<?php
// controllers/homepage.php
require('model/model_media/connection_database.php'); 
require('libraries/JSON/sponsor.php');
require('libraries/XML/currency.php');

function homepage()
{

  $products = (new CatalogProducts)::$poductsArray;
  $categories = (new CatalogCategories)::$categoriesArray;
  $projects = (new CatalogProjects)::$projectsArray;

  if(isset($_SESSION['LOGGED_USER_PICTURE'])){
    $profilpicture=$_SESSION['LOGGED_USER_PICTURE'];
  }

  
  $sponsor = new Sponsor();
  $sponsor->get_sponsor();
  if(!isset($sponsor->sponsor_information_image) or !isset($sponsor->sponsor_information_text) or !isset($sponsor->sponsor_information_link)){
    throw new Exception("Les accès aux données du sponsor sont compromis");
  }

  $currency = new Currency();
  $currency->get_memory_currency_updated();
  $rate_updated = $currency->rate_updated;
	
  require("view/homepageview.php");
}

function homepage_product_searched($input_search)
{
  $products = (new CatalogProducts)::$poductsArray;
  $categories = (new CatalogCategories)::$categoriesArray;
  $projects = (new CatalogProjects)::$projectsArray;


  $sponsor = new Sponsor();
  $sponsor->get_sponsor();
  if(!isset($sponsor->sponsor_information_image) or !isset($sponsor->sponsor_information_text) or !isset($sponsor->sponsor_information_link)){
    throw new Exception("Les accès aux données du sponsor sont compromis");
  }
  

  if(isset($_SESSION['LOGGED_USER_PICTURE'])){
      $profilpicture=$_SESSION['LOGGED_USER_PICTURE'];
  }
    
  $currency = new Currency();
  $currency->get_memory_currency_updated();
  $rate_updated =  $currency->rate_updated;
  
  $catalog_product = new CatalogProducts();
  $productSearched = $catalog_product->select_product($input_search);
  
  require("view/homepageview.php");
}