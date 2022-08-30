<?php $title = "DECONNECTION"; ?>
<?php $style = "view/css/disconnection.css"; ?>

<?php ob_start(); ?>

<?php require('component/header.php'); ?>

    <section class='disconnection'>
        <button><a href="index.php?action=disconnection&disconnection=True">DECONNECTION</a></button>
    </section>

<?php require('component/footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>