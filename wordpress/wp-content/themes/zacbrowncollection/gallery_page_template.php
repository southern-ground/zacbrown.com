<?php /* Template Name: Gallery Page Template */
get_header(); ?>

<main id="<?= get_field('custom_identifier') ?>" class="sub-page" role="main">
    <!-- section -->

    <section class="brand"
             style="background-image:url(<?= get_field('side_image')['url'] ?>">

        <?php if (get_field('logo')): ?>

            <div class="brand-container">
                <h1>
                    <img class="brand-logo"
                         src="<?= get_template_directory_uri() ?>/img/zb_customs/<?= get_field('logo') ?>"/>
                </h1>
                <h2 class="brand-tagline">
                    <?= get_field('tagline') ?>
                </h2>
                <div class="brand-copy">
                    <?= get_field('copy') ?>
                </div>

                <a class="brand-link"
                   href="<?= get_field('out-going_link')['url'] ?>">
                    <?= get_field('out-going_link')['title'] ?>
                </a>

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


                <ul class="brand-social">

                </ul>
            </div>

        <?php endif; ?>

    </section>

    <section class="brand-gallery">

        <h2 class="brand-gallery-title"><?= the_field('gallery_title') ?></h2>

        <ul class="brand-gallery-images">
            <?php
            if (have_rows('gallery_images')):

                while (have_rows('gallery_images')) : the_row();
                    $image = get_sub_field('gallery_image');
                    ?>

                    <li><img src="<?= $image['url'] ?>"/></li>

                <?php
                endwhile;
            endif;
            ?>

        </ul>
    </section>

</main>

<?php get_footer(); ?>
