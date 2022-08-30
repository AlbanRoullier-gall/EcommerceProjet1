<?php $title = "ACCUEIL"; ?>
<?php $style = "view/css/style.css"; ?>

<?php ob_start(); ?>

<!--HEADER------------------------------------------------------------------------->
    
<?php require('view/component/header.php'); ?>
    
<!--SPONSOR------------------------------------------------------------------------>

<?php require('view/component/sponsor.php'); ?>


<!--PHILOSOPHY--------------------------------------------------------------------->

<?php require('view/component/philosophy.php'); ?>

<!--CARROUSSEL--------------------------------------------------------------------->

<?php require('view/component/carroussel.php'); ?>

<!--SEARCHBAR---------------------------------------------------------------------->

<?php require('view/component/searchbar.php'); ?>


<!--CATEGORY----------------------------------------------------------------------->

<?php require('view/component/category.php'); ?>


<!--CATALOG------------------------------------------------------------------------>

<?php require('view/component/catalog.php'); ?>
    
<!--FOOTER------------------------------------------------------------------------->

<?php require('view/component/footer.php'); ?>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>