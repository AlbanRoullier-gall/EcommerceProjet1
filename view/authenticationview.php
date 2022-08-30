<!--AUTHENTIFICATION--------------------------------------------------------------->
<?php $title = "AUTHENTIFICATION"; ?>
<?php $style = "view/css/authentication.css"; ?>

<?php ob_start(); ?>

<?php require('component/header.php'); ?>

<section class='inscription'>
        <form method="post" action="index.php?action=authentication" >
            <div class='container'>
                <label for="email">Email</label>
                <input type="email" id="email" name= 'email' required />
            </div>
            <div class='container'>
                <label for="pass">Password</label>
                <input type="password" id="pass" name="password" 
                    minlength="8" required>
            </div>
            <div class='container'>
                <input type="submit" value="AUTHENTIFICATION" />
            </div>
        </form>
        <div class='inscription-button'>
          <a href="index.php?action=inscription"><button>INSCRIPTION</button></a>
        </div>
</section>

<?php require('component/footer.php'); ?>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>