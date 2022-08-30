<?php 

require('controller/homepage.php');
require('controller/authentication.php');
require('controller/disconnection.php');
require('controller/descriptionpage.php');
require('controller/cart.php');
require('controller/billing.php');
require('controller/readme.php');
require('controller/inscription.php');

session_start();



try
{
   if (isset($_GET['action']) && $_GET['action'] !== '') 
   {
      if ($_GET['action'] === 'authentication') 
      {
         if (isset($_POST['email']) && isset($_POST['password']))
         {
            authentication($_POST['email'], $_POST['password']);
         }
         else
         {
            require('view/authenticationview.php');;
         }
      }
      elseif ($_GET['action'] === 'disconnection')
      {
         if (isset($_GET['disconnection']))
         {
            disconnection($_GET['disconnection']);
         }
         else
         {
            disconnection_virgin();
         }
      }
      elseif (($_GET['action'] === 'descriptionproductpage'))
      {
         if (isset($_GET['nameproduct']))
         {
            descriptionpage($_GET['nameproduct']);
         }
      }
      elseif (($_GET['action'] === 'productAdded')){
         if (isset($_POST['nameProduct']) && isset($_POST['size']) && isset($_POST['quantity'])&& $_POST['size']!= 'size4')
         {
            $productAdded = (new Cart())->generate_article_with_product_existing($_POST['nameProduct'], $_POST['size'], $_POST['quantity']);
	         $_SESSION['cart'][]= $productAdded;
	         header('Location:index.php');
         }
         elseif(isset($_POST['nameProduct']) && isset($_POST['size']) && isset($_POST['quantity']) && isset($_POST['wishedSizeDim1']) && isset($_POST['wishedSizeDim2']) && isset($_POST['wishedSizeDim3']))
         {
            $productAdded = (new Cart())->generate_article_client_size_with_product_existing($_POST['nameProduct'], $_POST['size'], $_POST['quantity'], $_POST['wishedSizeDim1'], $_POST['wishedSizeDim2'], $_POST['wishedSizeDim3']);
	         $_SESSION['cart'][]= $productAdded;
	         header('Location:index.php');
         }
      }
      elseif (($_GET['action'] === 'cart')){
         if (isset($_GET['trashNameProduct'])){
            delete_product_cart($_GET['trashNameProduct']);
         }
         else{
            cart();
         }
      }
      elseif (($_GET['action'] === 'billing')){
         billing();
      }
      elseif (($_GET['action'] === 'readme')){
         readme();
      }
      elseif (($_GET['action'] === 'inscription')){
         inscription();
      }
      elseif ($_GET['action'] === 'removefromcartajax'){
         $_SESSION['cart'] = array_filter($_SESSION['cart'], function($article){
            return $article->name_product != $_POST['nameProduct'];
         });
         die('ok');
      }
      elseif ($_GET['action'] === 'taillepanierajax'){

         if(! isset($_SESSION['cart'])){
            die("VIDE");
         }

         echo count($_SESSION['cart']);
         exit;
      }
      else 
      {
         throw new Exception("Erreur 404 : la page que vous recherchez n'existe pas.");
      }
   } 
   else 
   {
      if(isset($_POST['search']))
      {
         homepage_product_searched($_POST['search']);
         
      }
      else
      {
         homepage();

      }
   }
}
catch (Exception $e) {
	echo 'Erreur : '.$e->getMessage();
}

