<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?><?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
      });
    </script>

</head>
<body <?php body_class(); ?>>

<!-- wrapper -->
<div class="wrapper">

    <!-- header -->
    <header class="header clear <?= is_front_page() ? 'home' : '' ?>" role="banner">

        <!-- logo -->
        <div class="logo">

            <a class="logo-link" href="<?php echo home_url(); ?>">

                <img class="logo-img"
                     src="<?php echo get_template_directory_uri(); ?>/img/logo-<?= is_front_page() ? 'vertical' : 'horizontal' ?>.svg"
                     alt="Home"
                     title="Zac Brown Collective">

            </a>

            <img class="tagline-img"
                 src="<?php echo get_template_directory_uri(); ?>/img/true_american_original-<?= is_front_page() ? 'two-lines' : 'one-line' ?>.png"
                 alt="True American Originals"
                 title="True American Originals">

        </div>
        <!-- /logo -->

        <div id="mobile-nav-toggle" class="nav-toggle open">
            <a href="#" id="nav-toggle" class="closed">
                <img class="nav-open"
                     src="<?= get_template_directory_uri() ?>/img/hamburger.svg"/>
                <img class="nav-close"
                     src="<?= get_template_directory_uri() ?>/img/hamburger-close.svg"/>
            </a>
        </div>


        <!-- nav -->
        <nav class="nav" role="navigation">
            <?php html5blank_nav(); ?>
        </nav>
        <!-- /nav -->
    </header>
    <!-- /header -->

