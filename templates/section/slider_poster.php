<div class="bixbox">
    <div class="releases latesthome">
        <h3><?= $title; ?></h3><a class="vl" href="<?= $slug; ?>">Xem thêm</a>
    </div>
    <div class="listupd normal">
        <div class="excstf">
            <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++; ?>
            <article class="bs" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                <div class="bsx"><a href="<?php the_permalink(); ?>" itemprop="url"
                                    title="<?php the_title(); ?> (<?= op_get_original_title() ?>) [<?= op_get_year() ?>]"
                                    class="tip" rel="37246">
                        <div class="limit">
                            <?php if(op_get_featured_post()) : ?>
                            <div class="hotbadge"><i class="fas fa-fire-alt"></i></div>
                            <?php endif ?>
                            <div class="typez ">
                                <?= op_get_status() ?></div>
                            <div class="ply"><i class="far fa-play-circle"></i></div>
                            <div class="bt"><span class="epx"><?= op_get_episode() ?></span> <span
                                        class="sb Soft Sub"><?= op_get_lang() ?></span></div>
                            <img src="<?= op_get_thumb_url() ?>"
                                 class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                 itemprop="image"
                                 title="<?php the_title(); ?> (<?= op_get_original_title() ?>) [<?= op_get_year() ?>]"
                                 alt="<?php the_title(); ?> (<?= op_get_original_title() ?>) [<?= op_get_year() ?>]"
                                 width="240" height="300" />
                        </div>
                        <div class="ttt">
                            <div class="tt"> <?php the_title(); ?> <h2 itemprop="headline"><?= op_get_original_title() ?> <?= op_get_episode() ?></h2>
                            </div>
                            <div class="timeago"> <?= op_get_original_title() ?></div>
                        </div>
                    </a></div>
            </article>
            <?php endwhile; ?>
        </div>
    </div>
</div>

