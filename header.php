<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cb-gygardening2023
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/figtree-v5-latin-300.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/figtree-v5-latin-600.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/playfair-display-v36-latin-regular.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="icon" href="<?=get_stylesheet_directory_uri()?>/img/favicon.png" type="image/png">

    <?php
if (get_field('ga_property', 'options')) {
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property', 'options')?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?=get_field('ga_property', 'options')?>'
        );
    </script>
    <?php
}
if (get_field('gtm_property', 'options')) {
    ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
        );
    </script>
    <!-- End Google Tag Manager -->
    <?php
}
if (get_field('google_site_verification', 'options')) {
    echo '<meta name="google-site-verification" content="' . get_field('google_site_verification', 'options') . '" />';
}
if (get_field('bing_site_verification', 'options')) {
    echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification', 'options') . '" />';
}

wp_head();
if (is_front_page()) {
    ?>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Grayshaw & Yeo Gardening Company",
            "url": "https://www.gygardening.co.uk/",
            "logo": "https://www.gygardening.co.uk/wp-content/themes/cb-gygardening2023/img/gy-logo.png",
            "description": "RHS trained gardeners providing gardening help and plant expertise, whether you have a small courtyard or a country estate, we will ensure it always looks its best. Providing gardening services in Surrey and Sussex",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Dorking",
                "addressRegion": "Surrey",
                "addressCountry": "UK"
            },
            "email": "hello@gygardening.co.uk",
            "contactPoint" : [
                {
                    "@type" : "ContactPoint",
                    "telephone" : "07917 208655",
                    "contactType" : "Jude Yeo"
                },
                {
                    "@type" : "ContactPoint",
                    "telephone" : "07799 292573",
                    "contactType" : "Emily Grayshaw"
                }
            ],
            "sameAs": [ 
                "https://www.instagram.com/grayshawyeo/",
                "https://www.facebook.com/Grayshaw-and-Yeo-Gardening-Company-Ltd-204835216323355/",
                "https://www.linkedin.com/company/grayshaw-and-yeo-gardening-company-south-east/"
            ]
        }
    </script>
    <?php
}
?>
</head>

<body <?php body_class(); ?>
    <?php understrap_body_attributes(); ?>>
    <?php
do_action('wp_body_open');
?>
    <div id="wrapperNavbar">
        <nav class="navbar">
            <button class="menu" id="menutoggle" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#rightOffcanvas" aria-controls="rightOffcanvas">
                Menu <i class="fa-solid fa-bars"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="rightOffcanvas"
                aria-labelledby="rightOffcanvasLabel">
                <div class="offcanvas-body">
                    <?php
                    wp_nav_menu(
                        array(
'theme_location'  => 'primary_nav',
'container_class' => 'container-xl w-100',
'menu_class'      => 'navbar-nav justify-content-between gap-1',
'fallback_cb'     => '',
'menu_id'         => 'navbarr',
'depth'           => 3,
'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
)
                    );
?>
                </div>
            </div>
        </nav>
        <?php
if (!is_front_page()) {
    ?>
        <a class="gylogo" href="/"></a>
        <?php
}
?>
    </div>
