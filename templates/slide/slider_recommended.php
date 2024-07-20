<div class="slidtop">
    <div class="loop owl-carousel full">
        <?php $key =0; while ($query->have_posts()) : $query->the_post(); $key++ ?>
        <div class="slide-item full">
            <div class="slide-bg"><img src="<?= op_get_poster_url() ?>"
                                       class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy" itemprop="image"
                                       title="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="212" height="300" /></div>
            <div class="slide-shadow"></div>
            <div class="slide-content">
                <div class="poster" style="position:relative"><a href="<?php the_permalink(); ?>"> <img
                                src="<?= op_get_thumb_url() ?>"
                                class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                itemprop="image" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="212"
                                height="300" /> </a></div>
                <div class="info-left">
                    <div class="title">
                        <div class="rating">
                            <div class="vote">
                                <div class="site-vote"><span class="fa fa-star"
                                                             aria-hidden="true"><span><?= op_get_rating() ?></span></span>
                                </div>
                            </div>
                        </div>
                        <span class="ellipsis"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                        <span class="release-year ellipsis"><?= op_get_original_title() ?>
                                (<?= op_get_year() ?>)</span>
                    </div>
                    <div class="extras">
                        <div class="extra-category">
                            <?php op_get_genres(', ') ?>
                        </div>
                    </div>
                    <div class="excerpt"><span class="title">Nội dung</span>
                        <p class="story">
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        </p>
                    </div>
                    <div class="cast"><span class="director"><strong>Tình trạng:   <?= op_get_status() ?></strong>
                             </span>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <div class="trending">
        <div class="tdb"><a href="<?= $trendingurl ?>">
                <div class="crown"></div>
                <div class="textbg blxc">
                    <div class="bghover"><span class="numa"><b>Trending</b> This Week</span>
                        <span class="numb"><b><?= $trendingname ?></b></span>
                    </div>
                </div>
                <div class="imgxa">
                    <div class="imgxb" style="background-image: url('<?= $trendingthumb ?>');">
                    </div>
                </div>
            </a></div>
    </div>
</div>
