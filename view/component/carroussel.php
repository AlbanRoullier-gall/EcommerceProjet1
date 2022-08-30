 <!--CARROUSSEL--------------------------------------------------------------------->

 <section class="carroussel">
    <ul class="carrousselpictures">
        <?php foreach($projects as $project) : ?>
            <li>
                <a href=""><img src=<?php echo $project->link_image_project; ?> /></a>
            </li>
        <?php endforeach ?>
    </ul>
    </section>