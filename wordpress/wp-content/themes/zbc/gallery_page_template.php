<?php /* Template Name: Gallery Page Template */
get_header(); ?>

<main id="<?= get_field('custom_identifier') ?>"
      class="sub-page"
      role="main"
      style="background-image:url(<?= get_field('side_image')['url'] ?>">

    <!-- section -->

    <section class="brand">

            <div class="brand-container">
                <?php if (get_field('logo')): ?>
                <h1>
                    <img class="brand-logo"
                         src="<?= get_template_directory_uri() ?>/img/brands/<?= get_field('custom_identifier') ?>/<?= get_field('logo') ?>"/>
                </h1>
                <?php endif; ?>
                <h2 class="brand-tagline">
                    <?= get_field('tagline') ?>
                </h2>
                <div class="brand-copy">
                    <?= get_field('copy') ?>
                </div>

                <?php if(get_field('out-going_link')): ?>

                <a class="brand-link"
                   href="<?= get_field('out-going_link')['url'] ?>"
                   target="<?= get_field('out-going_link')['target'] ?>">
                    <?= get_field('out-going_link')['title'] ?>
                </a>

                <?php endif; ?>

                <ul class="brand-social">
                    <?php
                    if (get_field('facebook_link')):
                        $facebook = get_field('facebook_link')['url'];
                        ?>

                        <li class="facebook">
                            <a href="<?= $facebook ?>" target="_blank">
                                <?= get_field('brand_name') ?> on Facebook
                            </a>
                        </li>

                    <?php
                    endif;
                    ?>
                    <?php
                    if (get_field('instagram_link')):
                        $instagram = get_field('instagram_link')['url'];
                        ?>

                        <li class="instagram">
                            <a href="<?= $instagram ?>" target="_blank">
                                <?= get_field('brand_name') ?> on Instagram
                            </a>
                        </li>

                    <?php
                    endif;
                    ?>
                </ul>

            </div>

    </section>

    <section class="brand-gallery">

        <h2 class="brand-gallery-title"><?= the_field('gallery_title') ?></h2>

        <?php

        $images = get_field('gallery_images');

        if( $images ): ?>
        <div class="flexslider">


            <ul class="slides">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <a href="<?php echo $image['url']; ?>" target="_blank">
                            <img src="<?= $image['url'] ?>"
                                 alt="<?php echo $image['alt']; ?>"
                                 caption="<?php echo $image['alt']; ?>" />
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>
