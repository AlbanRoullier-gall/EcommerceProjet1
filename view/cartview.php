<?php $title = "PANIER"; ?>
<?php $style = "view/css/cart.css"; ?>

<?php ob_start(); ?>

<?php require('component/header.php'); ?>

    
<!--TITLE------------------------------------------------------------------------------>
    <section class="title">
      <h2>PANIER</h2>
    </section>
    <!--PRODUCT---------------------------------------------------------------------------->
    <section class="panier">
      <?php foreach($productsCart as $product): ?>
      <div class="product-panier">
        <div class="products-button">
          <div>
        <!--PRODUCT-IMAGE--------------------------------------------------------------------->
            <img src=<?php echo $product->link_image_product ?> alt="" />
            <!--PRODUCT-TEXT---------------------------------------------------------------------->
            <div class="text-description">
              <h4><?php echo $product->name_product ?></h4>
              <p><?php echo $product->price_product ?>€/m²</p>
            </div>
          </div>  
          <!--PRODUCT-SIZING-------------------------------------------------------------------->
          <div class="sizing-description">
            <p>Dimension (cm)</p>
            <div class="established-sizes">
              <div>
                <input type="radio" id="20X20" <?php if ($product->article_size== "size1")echo "checked" ?> />
                <label for="20X20"> 20x20x1.5 </label>
              </div>
              <div>
                <input type="radio" id="50X50" <?php if ($product->article_size== "size2")echo "checked" ?> />
                <label for="50X50"> 50x50x1.5 </label>
              </div>
              <div>
                <input type="radio" id="100X100" <?php if ($product->article_size== "size3")echo "checked" ?> />
                <label for="100X100"> 100x100x1.5 </label>
              </div>
              <div>
                <input type="radio" id="other-size" <?php if ($product->article_size== "size4")echo "checked"?> />
                <label for="other-size">autres dimensions</label>
              <div class="wished-size">
              <label for="l"></label>
              <input
                type="text"
                id="l"
                name="wishedSizeDim1"
                placeholder="l(cm)"
                value = <?php if ($product->article_size== "size4")echo $product->article_wishedSizeDim1 ?>
              />
              <label for="L"></label>
              <input
                type="text"
                id="L"
                name="wishedSizeDim2"
                placeholder="L(cm)"
                value = <?php if ($product->article_size== "size4")echo $product->article_wishedSizeDim2 ?>
              />
              <label for="E"></label>
              <input
                type="text"
                id="E"
                name="wishedSizeDim3"
                placeholder="E(cm)"
                value = <?php if ($product->article_size== "size4")echo $product->article_wishedSizeDim3 ?>
              />
              </div>
            </div>
            </div>
          </div>
          <!--PRODUCT-BUTTON--------------------------------------------------------------------->
          <div class="add-button">
          <input
              type="number"
              id="product1"
              name="quantity<?php echo $element?>"
              min="0"
              required
              placeholder="1"
              value = <?php echo $product->article_quantity ?>
            />  
          </div>
          <!--PRODUCT-PRICE--------------------------------------------------------------------->
          <div class="sized-price">
            <p><?php echo $product->article_dimensionsPrice ?> €</p>
          </div>
          <!--PRODUCT-TRASH--------------------------------------------------------------------->
          <a href="index.php?action=cart&trashNameProduct=<?php echo $product->name_product ?>"><i class="fas fa-trash"></i></a>
        </div>
      </div>
      <?php endforeach; ?> 
      <!--MODALITY--------------------------------------------------------------------------->
      <div class="modalities-prices">
      <?php  $cumulationproductsCartDimensionsPrice=0 ?>
      <?php foreach($productsCart as $product): ?>
        <?php  $cumulationproductsCartDimensionsPrice += floatval ($product->article_dimensionsPrice ) ?>
      <?php endforeach; ?>
        <h2>Total: <?php echo $cumulationproductsCartDimensionsPrice ?> € </h2>
        <div class="livraison">
          <h4>livraison:</h4>
          <i class="fas fa-info-circle"></i>
        </div>
        <div class="modalities">
          <div>
            <i class="fas fa-stopwatch"></i>
            <p>Expédition sous 24h</p>
          </div>
          <div>
            <i class="fas fa-truck"></i>
            <p>Frais de port offert dés 20 €</p>
          </div>
          <div>
            <i class="fas fa-shield-alt"></i>
            <p>Paiement sécurisé</p>
          </div>
        </div>
      </div>
    </section>
    <!--BUTTON CONFIRMATION---------------------------------------------------------------->
    <section class="confirmation">
      <a href="index.php?action=billing">CONFIRMATION</a>
    </section>

<?php require('component/footer.php'); ?>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>