<?php $title = "FACTURATION"; ?>
<?php $style = "view/css/billingpage.css"; ?>

<?php ob_start(); ?>

<?php require('component/header.php'); ?>
    
    <!--TITLE-------------------------------------------------------------------------->
    <section class="title">
      <h2>FACTURATION</h2>
    </section>
    <!--ORDER-------------------------------------------------------------------------->
    <section class="order">
      <!--PERSONNAL-CONTACT-DETAILS---------------------------------------------------->
      <div class="personnal-contact-details">
        <h3>COORDONNEES PERSONNELLES</h3>
        <button class="inscription"><a href="authentication.php">AUTHENTIFICATION</a></button>
        <div class="name-firstname">
          <div class="container">
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname" value="<?php echo $userFirstname;?>" required />
          </div>
          <div class="container">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" value="<?php echo  $userName;?>" required />
          </div>
        </div>
        <label for="email">Email</label>
        <input type="email" id="email" value="<?php echo  $userEmail;?>" required />
        <label for="address">Adresse</label>
        <input type="text" id="address" name="address" value="<?php echo $userAddress;?>" required />
        <div class="city-encoding">
          <div class="container">
            <label for="postal-code">Code Postal</label>
            <input type="text" id="postal-code" name="postal-code" value="<?php echo  $userPostalCode;?>" required />
          </div>
          <div class="container">
            <label for="city">Ville</label>
            <input type="text" id="city" name="city" value="<?php echo  $userCity;?>" required />
          </div>
        </div>
        <div class="phone-country-encoding">
          <div class="container">
            <label for="phone">Téléphone</label>
            <input type="text" id="phone" name="phone" value="<?php echo  $userPhoneNumber;?>" required />
          </div>
          <div class="container">
            <label for="counrty">Pays</label>
            <input type="text" id="counrty" name="counrty" value="<?php echo  $userCountry;?>" required />
          </div>
        </div>
        <div class="container-radio">
          <input
            type="radio"
            id="registed-address"
            name="address"
            value="registed-address"
            checked
          />
          <label for="registed-address">Envoie à l’adresse enregistrée</label>
        </div>
        <div class="container-radio">
          <input
            type="radio"
            id="other-address"
            name="address"
            value="address"
          />
          <label for="other-address">Envoie à une autre adresse</label>
        </div>
      </div>
      <!--SHIPPING-PAYMENT------------------------------------------------------------->
      <div class="shipping-payment">
        <h3>METHODE D’EXPEDITION</h3>
        <div class="shipping">
          <div class="container-shipping">
            <img class="logo" src="view/media/font/colissimo.svg" alt="logo colissimo" />
            <input
              type="radio"
              id="colissimo"
              name="shipping"
              value="shipping"
              checked
            />
            <label for="colissimo"
              >LIVRAISON SOUS 3 JOURS OUVRABLES GRATUIT</label
            >
          </div>
          <div class="container-shipping">
            <img class="logo" src="view/media/font/dhl.svg" alt="logo dhl" />
            <input type="radio" id="dhl" name="shipping" value="shipping" />
            <label for="dhl">LIVRAISON SOUS 1 JOUR OUVRABLE 15.00 €</label>
          </div>
        </div>
        <!--PERSONNAL-CONTACT-PAYMENT-------------------------------------------------->
        <div class="payment">
          <h3>METHODE DE PAIEMENT</h3>
          <div class="container-payment">
            <div>
              <input
                type="radio"
                id="payment-card"
                name="payment-method"
                value="payment-method"
              />
              <label for="payment-card"
                >CARTE BANCAIRE - PAIEMENT SECURISE
              </label>
            </div>
            <div class="pictures-cards-container">
              <img
                class="logo"
                src="view/media/font/carte-bancaire.svg"
                alt="logo carte bancaire"
              />
              <img class="logo" src="view/media/font/visa.svg" alt="logo carte visa" />
              <img
                class="logo"
                src="view/media/font/american-express.svg"
                alt="logo carte american express"
              />
              <img
                class="logo"
                src="view/media/font/master-card.svg"
                alt="logo carte master card"
              />
            </div>
          </div>
          <div class="container-payment">
            <div>
              <input
                type="radio"
                id="payment-paypal"
                name="payment-method"
                value="payment-method"
              />
              <label for="payment-paypal">PAYPAL </label>
            </div>
            <img class="logo" src="view/media/font/paypal.svg" alt="logo paypal" />
          </div>
        </div>
      </div>
    </section>
    <!--ORDER-REVIEW------------------------------------------------------------------->
    <section class="order-review">
      <h3>REVISION DE COMMANDE</h3>
      <div class="order-review-box">
        <!--PRODUCT-DESCRIPTION-------------------------------------------------------->
        <div class="product-description">
          <div class="container">
            <h4>NOM DU PRODUIT</h4>
            <ul>
            <?php  $element=0?>
            <?php while($element<count($productsCart)): ?>
              <li><?php echo $productsCart[$element]['name'] ?></li>
            <?php $element ++ ?>
            <?php endwhile ?> 
            </ul>
          </div>
          <div class="container">
            <h4>QUANTITE</h4>
            <ul>
            <?php  $element=0?>
            <?php while($element<count($productsCart)): ?>
              <li><?php echo $productsCart[$element]['quantity'] ?></li>
            <?php $element ++ ?>
            <?php endwhile ?> 
            </ul>
          </div>
          <div class="container">
            <h4>SOUS-TOTAL</h4>
            <ul>
            <?php  $element=0?>
            <?php while($element<count($productsCart)): ?>
              <li><?php echo $productsCart[$element]['dimensionsPrice'] ?> €</li>
            <?php $element ++ ?>
            <?php endwhile ?> 
            </ul>
          </div>
        </div>
        <!--PRODUCT-PRICE-------------------------------------------------------->
        <?php  $cumulationproductsCartDimensionsPrice?>
        <?php  $element=0?>
        <?php while($element<count($productsCart)): ?>
        <?php  $cumulationproductsCartDimensionsPrice += floatval ($productsCart[$element]['dimensionsPrice']) ?>
        <?php $element ++ ?>
        <?php endwhile ?>
        <div class="price">
          <div class="container-price">
            <h4>SOUS-TOTAL</h4>
            <p><?php echo $cumulationproductsCartDimensionsPrice ?>  €</p>
          </div>
          <div class="container-price">
            <h4>TVA INCLUSE</h4>
            <p><?php echo 0.21 * floatval($cumulationproductsCartDimensionsPrice) ?> €</p>
          </div>
          <div class="container-price">
            <h4>TOTAL</h4>
            <p><?php echo floatval($cumulationproductsCartDimensionsPrice) + 0.21 * floatval($cumulationproductsCartDimensionsPrice) ?> €</p>
          </div>
        </div>
      </div>
    </section>
    <!--CONDITIONS--------------------------------------------------------------------->
    <section class="conditions">
      <div>
        <input
          type="checkbox"
          id="general-condition-of-sale"
          name="general-condition-of-sale"
          checked
        />
        <label for="general-condition-of-sale"
          >J’accepte les conditions générales de vente</label
        >
      </div>
    </section>

    <!--TO-ORDER----------------------------------------------------------------------->

    <section class="to-order">
      <button class="pass-order">PASSER COMMANDE</button>
    </section>

    <?php require('component/footer.php'); ?>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>