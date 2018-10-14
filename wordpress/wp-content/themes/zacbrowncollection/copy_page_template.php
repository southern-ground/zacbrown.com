<?php /* Template Name: Copy Page Template */
get_header(); ?>

<main class="sub-page copy-page" role="main">

    <!-- section -->
    <section>
        <h1>
            <?= get_field('page_title') ?>
        </h1>

        <div class="page-copy">
            <?= get_field('page_copy') ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
