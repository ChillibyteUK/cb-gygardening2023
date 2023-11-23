<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="footer pt-5">
    <div class="footer__overlay"></div>
    <div class="container-xl pb-4">
        <div class="row pb-4">
            <div class="col-sm-3 mb-2 order-1">
                <a href="<?=get_home_url()?>"><img
                        src="<?=get_stylesheet_directory_uri()?>/img/gy-gardening-logo--wo.svg"
                        alt="GY Gardening" class="logo img-fluid mb-4"></a>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2 order-3 order-lg-2">
                <div class="footer__title">Contact</div>
                <ul>
                    <li>Emily: <a
                            href="tel:<?=parse_phone(get_field('contact_emily', 'options'))?>"><?=get_field('contact_emily', 'options')?></a>
                    </li>
                    <li>Judith: <a
                            href="tel:<?=parse_phone(get_field('contact_judith', 'options'))?>"><?=get_field('contact_judith', 'options')?></a>
                    </li>
                    <li><a
                            href="mailto:<?=get_field('contact_email', 'options')?>"><?=get_field('contact_email', 'options')?></a>
                    </li>
                </ul>
                <div class="footer__socials">
                    <?php
                    $s = get_field('social','options');
                    ?>
                    <a href="<?=$s['instagram_url']?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="<?=$s['facebook_url']?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="<?=$s['linkedin_url']?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2 order-4 order-lg-3">
                <div class="footer__title">Locations</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu1')); ?>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2 order-4 order-lg-3">
                <div class="footer__title">Links</div>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu2')); ?>
            </div>
        </div>
    </div>
    <div class="colophon">
        <div class="container-xl">
            <div>&copy; <?=date('Y')?> Grayshaw &amp; Yeo Gardening Company Ltd. Registered in England, No. 07902181
            </div>
            <div class="colophon__links">
                <a href="/terms/">Terms</a> |
                <a href="/privacy/">Privacy Policy</a> |
                <a href="/cookies/">Cookie Preferences</a>
                <a href="https://www.chillibyte.co.uk/" rel="nofollow noopener" target="_blank" class="cb"
                    title="Digital Marketing by Chillibyte"></a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>