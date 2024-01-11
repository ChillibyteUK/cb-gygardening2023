<?php

$classes = $block['className'] ?? null;

if (get_field('location') ?? null) {
    // cbdump(get_field('location'));
    $locas = get_field('location');
    $q = new WP_Query(array(
        'post_type' => 'gardener',
        'posts_per_page' => -1,
        'orderby' => 'rand',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'location',
                'field' => 'id',
                'terms' => $locas,
                'operator' => 'IN',
            )
        )
    ));
}
else {
    $q = new WP_Query(array(
        'post_type' => 'gardener',
        'posts_per_page' => -1,
        'orderby' => 'rand',
        'order' => 'ASC'
    ));
}
if ($q->have_posts()) {
?>
<section class="gardener_carousel py-5 <?=$classes?>">
    <div class="container-xl">
        <?php
        if (get_field('title')) {
            echo '<h2 class="text-center h1 mb-4">' . get_field('title') . '</h2>';
        }
?>
        <div class="gardener_carousel__carousel mb-4">
            <?php
    while($q->have_posts()) {
        $q->the_post();
        ?>
            <div class="gardener_carousel__card">
                <img src="<?=get_the_post_thumbnail_url($q->ID, 'large')?>"
                    alt="">
                <div class="gardener_carousel__title">
                    <?=get_the_title()?></div>
            </div>
            <?php
    }
?>
        </div>
        <?php
        if (get_field('cta')) {
            $c = get_field('cta');
            ?>
        <div class="text-center">
            <a href="<?=$c['url']?>"
                target="<?=$c['target']?>"
                class="btn btn-primary"><?=$c['title']?></a>
        </div>
        <?php
        }
?>
    </div>
</section>
<?php
}
/*
add_action('wp_footer', function () {
    ?>
<script>
    jQuery(function($) {
        $('.gardener_carousel__carousel').slick({
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 500,
            pauseOnHover: false,
            cssEase: 'ease',
            arrows: true,
            nextArrow: '<img src="<?=get_stylesheet_directory_uri()?>/img/arrow-right.svg">',
            prevArrow: '<img src="<?=get_stylesheet_directory_uri()?>/img/arrow-left.svg">',
            dots: false,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                }
            ]
        });
    });
</script>
<?php
});
*/
