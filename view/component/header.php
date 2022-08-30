<!--HEADER------------------------------------------------------------------------->
<header>
      <div class="container-menu">
        <div class="container-brand">
          <h1 class="title"><a href="index.php">NATURE DE PIERRE</a></h1>
          <img class="logo" src='view/media/font/logoNatureDePierreIcon.svg' />
        </div>
        <nav class="menu">
          <ul>
            <li><a href="index.php#category">CATALOGUE </a></li>
            <li><a href="index.php#philosophy">PHILOSOPHIE </a></li>
            <li><a href="#contact">CONTACT </a></li>
          </ul>
        </nav>
      </div>
      <div class="readme"><a href="index.php?action=readme">READ ME </a></div>
      <div class="container-services">
        <ul>
          <?php if(isset($profilpicture)): ?>
            <a href="index.php?action=disconnection"><img src="<?php echo $profilpicture; ?>" alt=""/></a>
          <?php else: ?>
            <li>
              <a href="index.php?action=authentication"><i class="far fa-user-circle"></i></a>
            </li>
          <?php endif; ?>
          <li>
            <a href="index.php?action=cart"><i class="fas fa-shopping-bag"></i></a>
            <br>
            <span id="taille-panier"></span>
          </li>
          <li>
            <a href=""><i class="far fa-heart"></i></a>
          </li>
          <li>
            <a href="index.php?action=billing"><i class="fas fa-cart-arrow-down"></i></a>
          </li>
        </ul>
      </div>
    </header>