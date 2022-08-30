<!--CATEGORY------------------------------------------------------------------------->

<section id="category">
    <div class="category-btn">
        <label class="btn" for="toggle">CATEGORIE ▼</label>
        <input type="checkbox" id="toggle" />
        <ul class="stone-type">
            <?php foreach($categories as $cat) : ?>        
                <li>
                    <input type="checkbox" id=<?php echo $cat->name_category; ?> name=<?php echo $cat->name_category; ?> />
                    <label for=<?php echo $cat->name_category; ?>><?php echo $cat->name_category; ?></label>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    </section>
  