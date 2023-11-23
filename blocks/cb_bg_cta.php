<?php
$img = wp_get_attachment_image_url(get_field('background'), 'full');
$l = get_field('cta');
?>
<section class="bg_cta py-5" style="background-image:url(<?=$img?>)">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-lg-6">
                <h2 class="animtitle underline mb-4"><?=get_field('title')?></h2>
            </div>
            <div class="col-lg-6" data-aos="fade-in-right">
                <div class="mb-4"><?=get_field('content')?></div>
                <a href="<?=$l['url']?>" class="wp-block-button__link"><?=$l['title']?></a>
            </div>
        </div>
    </div>
</section>