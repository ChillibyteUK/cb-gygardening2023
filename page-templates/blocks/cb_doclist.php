<?php
$classes = $block['className'] ?? null;
$list = get_field('list_type') == 'Numbers' ? 'ol' : 'ul';
?>
<section class="doclist <?=$classes?>">
    <div class="container-xl">
        <<?=$list?>>
            <?php
        while (have_rows('files')) {
            the_row();
            $f = get_sub_field('file');
            ?>
            <li class="mb-3">
                <div class="doclist__item">
                    <span><?=get_sub_field('title')?></span>
                    <a href="<?=$f['url']?>"
                        download="<?=$f['filename']?>"
                        class="btn btn-primary">
                        <i
                            class="fa-solid fa-file-<?=$f['subtype']?>"></i>
                        <?=$f['subtype']?>
                        (<?=formatBytes($f['filesize'])?>)
                    </a>
                </div>
            </li>
            <?php
        }
?>
        </<?=$list?>>
    </div>
</section>