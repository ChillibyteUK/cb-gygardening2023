<?php
$classes = $block['className'] ?? null;

$bg = $block['backgroundColor'] ?? null;
if ($bg != '') {
    $bg = $bg . '-background-color';
}

$splitText = 'col-md-6';
$splitImage = 'col-md-6';

if (get_field('split') == '6040') {
    $splitText = 'col-md-8';
    $splitImage = 'col-md-4';
}

$orderText = 'order-2 order-md-1';
$orderImage = 'order-1 order-md-2';

if (get_field('order') == 'image-text') {
    $orderText = 'order-2 order-md-2';
    $orderImage = 'order-1 order-md-1';
}
?>
<section class="text_image <?=$bg?> <?=$classes?>">
    <div class="container-xl py-5">
        <div class="d-lg-none"><h2><?=get_field('title')?></h2></div>
        <div class="row align-items-center g-4">
            <div class="<?=$splitText?> <?=$orderText?>">
                <h2 class="d-none d-lg-block"><?=get_field('title')?></h2>
                <div class="py-4"><?=get_field('content')?></div>
                <?php
                if (get_field('cta')) {
                    $link = get_field('cta');
                    ?>
                    <a href="<?=$link['url']?>" target="<?=$link['target']?>" class="btn btn-primary"><?=$link['title']?></a>
                    <?php
                }
                ?>
            </div>
            <div class="<?=$splitImage?> <?=$orderImage?> text-center">
                <?=wp_get_attachment_image(get_field('image'), 'large', null, array('class' => 'text_image__image'))?>
            </div>
        </div>
    </div>
</section>