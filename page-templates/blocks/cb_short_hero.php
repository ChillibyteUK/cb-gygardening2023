<?php
$img = wp_get_attachment_image_url(get_field('background'), 'full');// ?? null;
$class = $block['className'] ?? null;
?>
<section class="short-hero d-flex <?=$class?>" style="background-image:url(<?=$img?>)">
    <div class="overlay--light"></div>
    <div class="container-xl d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    <?=get_field('title')?>
                </h1>
                <?php
                if (get_field('content')) {
                    ?>
                <div class="text-white" data-aos="fade"><?=get_field('content')?></div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>