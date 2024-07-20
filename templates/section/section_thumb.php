<div class="bixbox">
    <div class="releases hothome">
        <h3><?= $title; ?></h3>
    </div>
    <div class="listupd flex">
        <div class="excstf">
<?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++; ?>
            <article class="stylefor" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                <div class="bsx"><a href="<?php the_permalink(); ?>" itemprop="url" title="<?php the_title(); ?>"
                                    class="tip" rel="<?= get_the_ID(); ?>">
                        <div class="limit">
                            <div class="typez"><?= op_get_quality() ?></div>
                            <img src="<?= op_get_thumb_url() ?>"
                                 class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                 itemprop="image" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"
                                 width="203" height="300" />
                            <div class="tt">
                                <h2 itemprop="headline"><?php the_title(); ?></h2> <span><?= op_get_episode() ?>
                                        <i><?= op_get_lang() ?></i></span>
                            </div>
                        </div>
                    </a></div>
            </article>
            <?php endwhile; ?>
        </div>
        <div class="hpage"><a href="<?= $slug; ?>" class="r">Xem thêm <i class="fa fa-chevron-right"
                                                                               aria-hidden="true"></i></a></div>
    </div>
</div>
