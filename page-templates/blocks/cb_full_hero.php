<?php
$class = $block['className'] ?? null;
?>
<section class="full-hero">
    <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
            $l = count(get_field('slides'));
            $active = 'active';
            for ($i = 0; $i < $l; $i++) {
                ?>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="<?=$i?>" class="<?=$active?>" aria-current="true" aria-label="Slide <?=$i?>"></button>
                <?php
                $active = '';
            }
            ?>
        </div>
        <div class="carousel-inner">
            <?php
            $active = 'active';
            foreach (get_field('slides') as $s) {
                $img = wp_get_attachment_image_url($s, 'full');
                ?>
            <div class="carousel-item <?=$active?>" style="background-image:url(<?=$img?>)"></div>
                <?php
                $active = '';
            }
            ?>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="full-hero__inner">
        <div class="container-xl d-flex flex-column justify-content-center">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/gy-gardening-logo--wo.svg" alt="">
                    <h1 class="text-center"><?=get_field('title')?></h1>
                    <?php
                    if (get_field('content')) {
                        ?>
                    <div class="text-center mb-4"><?=get_field('content')?></div>
                        <?php
                    }
                    ?>
                    <div class="buttons d-flex justify-content-center gap-4 flex-wrap mb-4">
                    <?php
                    if (get_field('cta_1')) {
                        $a = get_field('cta_1');
                        ?>
                    <a href="<?=$a['url']?>" class="btn btn-white" target="<?=$a['target']?>"><?=$a['title']?></a>
                        <?php
                    }
                    if (get_field('cta_2')) {
                        $a = get_field('cta_2');
                        ?>
                    <a href="<?=$a['url']?>" class="btn btn-white" target="<?=$a['target']?>"><?=$a['title']?></a>
                        <?php
                    }
                    ?>
                    </div>
                    <?php
                    if (get_field('badges')) {
                        echo '<div class="badges">';
                        foreach (get_field('badges') as $b) {
                            ?>
                    <img src="<?=wp_get_attachment_image_url($b,'full')?>" alt="">
                            <?php
                        }
                        echo '</div>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer',function(){
    ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/accessible-slick-theme.min.css">
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js"></script>
    <script>
    jQuery(function($){
      $('.badges').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        autoplay: true
                    }
                },
                {
                    breakpoint: 480,
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
},9999);