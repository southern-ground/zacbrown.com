<?php /* Template Name: Home Page */
get_header(); ?>

<main role="main">
    <!-- section -->

    <section class="content-slider">

        <div id="slider">
            <ul class="slides">
                <?php
                $index = 0;
                // Check that there slides:
                while (have_rows('slides')) : the_row();
                    $image = get_sub_field('slide_background_image');
                    $target = get_sub_field('opens_in_new_window') ? "target='_blank'" : "";
                    ?>
                    <li class="slide" data-index="<?=$index?>">
                        <img class="background" src="<?=get_sub_field('slide_background_image')?>" />
                        <div class="copy">
                            <h2><?=get_sub_field('slide_headline')?></h2>
                            <div>
                                <div class="sub-copy">
                                    <?=get_sub_field('slide_copy')?>
                                    <p class="slide-cta">
                                        <a class="slide-link" href="<?=get_sub_field('slide_cta_url')?>" <?=$target?>>
                                            <?=get_sub_field('slide_cta_text')?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php
                $index++;
                endwhile;
                ?>
            </uL>
        </div>

        <div class="slider-pips">
            <?php

            $index = 0;

            while (have_rows('slides')) : the_row();

            ?>
                <a data-index="<?=$index?>" class="slider-pip" href="#"></a>
            <?php
            $index++;
            endwhile;
            ?>
        </div>
        <!--
        <a href="#" class="control control--next">></a>
        <a href="#" class="control control--prev"><</a>
        -->
    </section>

    <section id="our-philosophy">
        <div class="bottom">
            <h2><?= the_field('title') ?></h2>
            <?= the_Field('copy') ?>
            <a href="#" class="scroll-to-top">
                <img class="bottom-logo" src="<?= get_template_directory_uri() ?>/img/logo.svg"/>
            </a>
        </div>
    </section>

    <?php
    // Check that there are 3-ups:
    if (have_rows('home_page_3-up')):
        $index = 0;
        ?>
        <section>
            <ul class="three-up">
                <?php

                // loop through the rows of data
                while (have_rows('home_page_3-up') && $index < 2) : the_row();

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

                ++$index;

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

</main>

<?php get_footer(); ?>
