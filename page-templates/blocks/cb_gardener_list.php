<?php

$classes = $block['className'] ?? null;

$q = new WP_Query(array(
    'post_type' => 'gardener',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
));
?>
<section class="gardener_list py-5 <?=$classes?>">
    <div class="container-xl">
        <?php
        if (get_field('title')) {
            echo '<h2 class="mb-5">' . get_field('title') . '</h2>';
        }
        while($q->have_posts()) {
            $q->the_post();
            ?>
            <div class="gardener_list__card">
                <img src="<?=get_the_post_thumbnail_url($q->ID,'full')?>" alt="<?=get_the_title()?>">
                <div>
                    <h3><?=get_the_title()?></h3>
                    <?=get_the_content()?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>
