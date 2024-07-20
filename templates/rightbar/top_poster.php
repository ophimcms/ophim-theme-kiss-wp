<div class="section">
    <div class="releases">
        <h3><span>&nbsp;<?= $title; ?></span></h3>
    </div>
    <div class='serieslist'>
        <ul>
            <?php $loop =0; while ($query->have_posts()) : $query->the_post(); $loop++; ?>
            <li>
                <div class="imgseries"><a class="series" href="<?php the_permalink(); ?>" rel=""> <img
                                src="<?= op_get_thumb_url() ?>"
                                class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                itemprop="image" title="<?php the_title(); ?> (<?= op_get_year() ?>)" alt="<?php the_title(); ?> (<?= op_get_year() ?>)"
                                width="200" height="300" /> </a></div>
                <div class="leftseries">
                    <h4><a class="series" href="<?php the_permalink(); ?>" rel="37993"> <?php the_title(); ?> (<?= op_get_year() ?>) </a>
                    </h4>
                    <span><?= op_get_original_title() ?></span>
                    <span><b>Thể loại</b>:
                               <?= op_get_genres(', ') ?>
                        </span>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
