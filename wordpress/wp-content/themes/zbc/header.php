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

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start':
            new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-TTCCKC6');</script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <script>
      !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '483904855794575');
      fbq('track', 'PageView');
    </script>
    <!-- End Facebook Pixel Code -->

</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTCCKC6"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Facebook Pixel (noscript) -->
<noscript>
    <img height="1"
         width="1"
         src="https://www.facebook.com/tr?id=483904855794575&ev=PageView&noscript=1"/>
</noscript>
<!-- END Facebook Pixel (noscript) -->

<?php
/*
Controversy Takeover Setup
*/

date_default_timezone_set('EST');
$controversy = true;
$isRoot = $_SERVER['REQUEST_URI'] == "/";
?>

<?php if ($isRoot && $controversy) : ?>
    <!-- controversy takeover -->

    <div id="controversy">
        <script>
          var bodyEl = document.getElementsByTagName('html')[0];
          var htmlEl = document.getElementsByTagName('body')[0];
          bodyEl.classList.add('takeover');
          htmlEl.classList.add('takeover');
          var takeoverEl = document.getElementById('controversy');

          function closeTakeover() {
            bodyEl.classList.remove('takeover');
            htmlEl.classList.remove('takeover');
            takeoverEl.classList.add('hidden');
            // document.cookie = "controversy=true";
          }

          // Disable scrolling.
          document.ontouchmove = function (e) {
            e.preventDefault();
          };

        </script>
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/always_and_never/always_never.png">
        <div class="content">
            <div>
                <a class="listen"
                   name="listen"
                   title="Listen Now"
                   href="http://smarturl.it/ZBalwaysandnever"
                   target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/always_and_never/listen_now.png">
                    Listen Now
                </a>
                <a class="store"
                   name="store"
                   title="Store"
                   href="https://store.zacbrown.com/"
                   target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/always_and_never/store.png">
                    Store
                </a>
            </div>
			<!--
            <div>
                <a class="continue" title="Continue" onclick="closeTakeover()">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/controversy/controversy-cta-continue.png">
                    Continue to ZacBrown.com
                </a>
            </div>
			-->
            <div class="social">
                <a class="social facebook"
                   title="Facebook"
                   name="facebook"
                   href="http://facebook.com/zacbrownofficial"
                   target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/always_and_never/social-facebook.png">
                </a>
                <a class="social instagram"
                   title="Instagram" name="instagram" href="http://instagram.com/zacbrown" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/always_and_never/social-instagram.png">
                </a>
                <a class="social youtube"
                   title="YouTube"
                   name="youtube"
                   href="https://www.youtube.com/zacbrown"
                   target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/always_and_never/social-youtube.png">
                </a>
            </div>
        </div>
    </div>
    <!-- END controversy takeover -->
<?php endif; ?>

<?php
/*
 * END Controversy Takeover
 */
?>

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
            <ul>
                <?php html5blank_nav(); ?>
            </ul>
        </nav>
        <!-- /nav -->
    </header>
    <!-- /header -->

