 <!--CATALOG------------------------------------------------------------------------>
 <?php if(isset($productSearched)): ?>
    <div class="stone-description">
                    <a href="index.php?action=descriptionproductpage&nameproduct=<?php echo $productSearched->name_product; ?>"><img src=<?php echo $productSearched->link_image_product; ?> alt="" /></a>
                    <div class="text-description">
                        <i class="fa fa-minus"></i>
                        <label class="favorite" for=<?php echo str_replace(' ', '', $productSearched->name_product); ?>>
                            <input type="checkbox" id=<?php echo str_replace(' ', '', $productSearched->name_product); ?> />
                            <i class="far fa-heart unchecked"></i>
                            <i class="fas fa-heart checked"></i>
                        </label>
                        <div class="text">
                            <h3><?php echo $productSearched->name_category;?></h3>
                            <p>Prix : <?php echo $productSearched->price_product; ?>€/m²</p>
                            <p>Prix : <?php echo number_format((($productSearched->price_product)*$rate_updated),2); ?>$/sq. m</p>
                        </div>
                        <i class="fa fa-plus" data-id-product="<?php echo $productSearched->id_product; ?>"></i>
                    </div>
                </div>
<?php else: ?>
 <section class="catalogue">
        <?php $line=0 ?>
        <?php  $element=0?>
        <?php while($line<5 and $element<count($products)): ?>
            <?php $elementcounter=0?>
            <div class="stone-line">
                <?php $line++ ?>
                <?php while($elementcounter<4): ?>
                <div class="stone-description">
                    <a href="index.php?action=descriptionproductpage&nameproduct=<?php echo $products[$element]->name_product; ?>"><img src=<?php echo $products[$element]->link_image_product; ?> alt="" /></a>
                    <div class="text-description">
                        <i class="fa fa-minus" data-product-name="<?php echo $products[$element]->name_product; ?>"></i>
                        <label class="favorite" for=<?php echo str_replace(' ', '', $products[$element]->name_product); ?>>
                            <input type="checkbox" id=<?php echo str_replace(' ', '', $products[$element]->name_product); ?> />
                            <i class="far fa-heart unchecked"></i>
                            <i class="fas fa-heart checked"></i>
                        </label>
                        <div class="text">
                            <h3><?php echo $products[$element]->name_category; ?></h3>
                            <p>Prix : <?php echo $products[$element]->price_product; ?>€/m²</p>
                            <p>Prix : <?php echo number_format((($products[$element]->price_product)*$rate_updated), 2); ?>$/sq. m</p>
                        </div>
                        <i class="fa fa-plus" data-product-name="<?php echo $products[$element]->name_product; ?>"></i>
                    </div>
                </div> 
                <?php $element ++ ?>
                <?php $elementcounter ++ ?>
                <?php endwhile ?> 
            </div> 
        <?php endwhile ?> 
    </section>
<?php endif; ?>
