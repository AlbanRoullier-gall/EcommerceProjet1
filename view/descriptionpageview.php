<?php $title = "DESCRIPTION"; ?>
<?php $style = "view/css/descriptionpage.css"; ?>

<?php ob_start(); ?>

<?php require('component/header.php'); ?>
    <!--TITLE-------------------------------------------------------------------------->
    <section class="title">
      <h2>Descriptif</h2>
    </section>
    <!--DESCRIPTION-PRODUCT------------------------------------------------------------>
    <section class="description-product">
      <!--CARROUSSEL-PRODUCT----------------------------------------------------------->
      <article class="picture">
        <input type="radio" id="image1" name="image" checked />
        <input type="radio" id="image2" name="image" />
        <input type="radio" id="image3" name="image" />
        <div class="container">
          <div class="featured-wrapper">
            <ul class="featured-list">
              <li>
                <figure>
                  <img src="<?php echo $productChecked->link_image_product ?>" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/Pierres/marbre2.jpeg" alt="" />
                </figure>
              </li>
              <li>
                <figure>
                  <img src="img/Pierres/marbre3.jpg" alt="" />
                </figure>
              </li>
            </ul>
          </div>
          <ul class="thumb-list">
            <li>
              <label for="image1">
                <img src="<?php echo $productChecked->link_image_product ?>" alt="" />
                <span class="inner">°</span>
              </label>
            </li>
            <li>
              <label for="image2">
                <img src="img/Pierres/marbre2.jpeg" alt="" />
                <span class="inner">°</span>
              </label>
            </li>
            <li>
              <label for="image3">
                <img src="img/Pierres/marbre3.jpg" alt="" />
                <span class="inner">°</span>
              </label>
            </li>
          </ul>
        </div>
      </article>
      <!--PRODUCT-TEXT----------------------------------------------------------------->
      <article class="text">
        <h2><?php echo $productChecked->name_product ?></h2>
        <p>
        <?php echo $productChecked->description_product ?>
        </p>
      </article>
      <!--PRODUCT-QUATLITIES----------------------------------------------------------->
      <article class="properties-panier">
      <form method="post" action="index.php?action=productAdded">
      <input type="hidden" name="nameProduct" value="<?php echo $productChecked->name_product ?>">
      <input type="hidden" name="priceProduct" value="<?php echo $productChecked->price_product ?>">
      <input type="hidden" name="pictureProduct" value="<?php echo $productChecked->link_image_product ?>">
          <!--PRODUCT-SIZING------------------------------------------------------------->
          <div class="sizing-description">
            <p>Dimensions (cm)</p>
            <div class="established-sizes">
              <div>
                <input type="radio" id="20X20-3" name="size" value="size1" />
                <label for="20X20-3"> 20 x 20 x 1.5 </label>
              </div>
              <div>
                <input type="radio" id="50X50-3" name="size" value="size2" />
                <label for="50X50-3"> 50 x 50 x 1.5 </label>
              </div>
              <div>
                <input type="radio" id="100X100-3" name="size" value="size3" />
                <label for="100X100-3"> 100 x 100 x 1.5 </label>
              </div>
              <div>
                <input type="radio" aria-describedby="other-size-4" name="size" value="size4"  required/>
                <label aria-describedby="other-size-4">autres dimensions</label>
                <div class="wished-size">
                  <label for="l"></label>
                  <input
                    type="number"
                    step="0.5"
                    min="0.5"
                    id="other-size-4"
                    name="wishedSizeDim1"
                    placeholder="l(cm)"
                    value=1
                  />
                  <label for="L"></label>
                  <input
                    type="number"
                    step="0.5"
                    min="0.5"
                    id="other-size-4"
                    name="wishedSizeDim2"
                    placeholder="L(cm)"
                    value=1
                  />
                  <label for="E"></label>
                  <input
                    type="number"
                    step="0.5"
                    min="0.5"
                    max="3"
                    id="other-size-4"
                    name="wishedSizeDim3"
                    placeholder="E(cm)"
                    value= 1 
                  />
                </div>
              </div>
            </div>
          </div>
          <!--PRODUCT-BUTTON------------------------------------------------------------->
          <p>Quantité</p>
          <div class="add-button">
            <input
              type="number"
              id="product1"
              name="quantity"
              min="1"
              required
              placeholder="1"
            />
          </div>
          <!--PRODUCT-PRICE-------------------------------------------------------------->
          <div class="sized-price">
            <p><?php echo $productChecked->price_product ?> €</p>
          </div>
          <input type="submit" value="AJOUT PANIER" />
        </form>
      </article>
    </section>

<?php require('component/footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>


