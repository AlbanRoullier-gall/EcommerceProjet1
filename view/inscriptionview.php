<?php $title = "INSCRIPTION"; ?>
<?php $style = "view/css/inscription.css"; ?>

<?php ob_start(); ?>

<?php require('component/header.php'); ?>

  <!--INSCRIPTION-------------------------------------------------------------------->

  <section class='inscription'>
        <form method="post" action="../controller/form_submitted.php" >
            <div class='container'>
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="firstname" required />
            </div>
            <div class='container'>
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required />
            </div>
            <div class='container'>
                <label for="email">Email</label>
                <input type="email" id="email" required />
            </div>
            <div class='container'>
                <label for="pass">Password</label>
                <input type="password" id="pass" name="password"
                    minlength="8" required>
            </div>
            <div class='container'>
                <input type="submit" value="INSCRIPTION" />
            </div>
        </form>
    </section>

<?php require('component/footer.php'); ?>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>