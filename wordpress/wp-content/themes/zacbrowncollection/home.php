<?php /* Template Name: Home Page */
get_header(); ?>

<main role="main">
    <!-- section -->
    <?php
    // Check that there are 3-ups:
    if (have_rows('home_page_3-up')):
        ?>
        <section>
            <ul class="three-up">
                <?php

                // loop through the rows of data
                while (have_rows('home_page_3-up')) : the_row();

                    $image = get_sub_field('brand_image');

                    ?>

                    <li class="three-up--item">
                        <a href="<?= get_sub_field('brand_link') ?>">
                            <img class="three-up--background" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"/>
                            <div class="hover"></div>
                            <div class="three-up--item-info">

                                <div class="three-up--item-brand-name">
                                    <?= get_sub_field('brand_name') ?>
                                </div>
                                <div class="three-up--item-brand-meet">
                                    Meet the Maker
                                </div>

                            </div>
                        </a>
                    </li>

                <?php

                endwhile;

                ?>

            </uL>
        </section>
    <?php
    endif;

    if (have_rows('home_page_1-ups')):
        ?>
        <section>
            <ul class="one-up">
                <?php

                // loop through the rows of data
                while (have_rows('home_page_1-ups')) : the_row();

                    $image = get_sub_field('brand_image');

                    ?>

                    <li class="one-up--item">
                        <a href="<?= get_sub_field('brand_link') ?>">
                            <img class="one-up--background" src="<?= $image['url'] ?>" alt="<?= $image['caption'] ?>"/>
                            <div class="hover"></div>
                            <div class="one-up--item-info">
                                <div class="one-up--item-brand-name">
                                    <?= get_sub_field('brand_name') ?>
                                </div>
                                <div class="one-up--item-brand-meet">
                                    <?= get_sub_field('brand_tagline') ?>
                                </div>
                            </div>
                        </a>
                    </li>

                <?php

                endwhile;

                ?>

            </uL>
        </section>
    <?php

    endif;

    ?>

    <section>
        <div class="bottom">
            <h2><?= the_field('title') ?></h2>
            <?= the_Field('copy') ?>
            <a href="#" class="scroll-to-top">
                <img class="bottom-logo" src="<?= get_template_directory_uri() ?>/img/logo.svg"/>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
