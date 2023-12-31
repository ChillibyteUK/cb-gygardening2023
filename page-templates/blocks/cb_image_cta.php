<?php
$img = wp_get_attachment_image_url(get_field('background'),'full');
$c = get_field('cta');
?>
<section class="image_cta py-5" style="background-image:url(<?=$img?>)">
    <div class="overlay"></div>
    <div class="container-xl py-5">
        <h2 class="image_cta__title"><?=get_field('title')?></h2>
        <div class="image_cta__content"><?=get_field('content')?></div>
        <a href="<?=$c['url']?>" target="<?=$c['target']?>" class="btn btn-white"><?=$c['title']?></a>
    </div>
</section>