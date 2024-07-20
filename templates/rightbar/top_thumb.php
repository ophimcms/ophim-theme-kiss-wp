<div class="section">
    <div class="releases">
        <h3><?= $title; ?></h3>
    </div>
    <div id="wpop-items">
        <div class='serieslist pop wpop wpop-weekly'>
            <ul>
                <?php $loop =0; while ($query->have_posts()) : $query->the_post(); $loop++; ?>
                <li>
                    <div class="ctr"><?= $loop ?></div>
                    <div class="imgseries"><a class="series" href="<?php the_permalink(); ?>" rel="68"> <img
                                    src="<?= op_get_thumb_url() ?>"
                                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy"
                                    width="214" height="300" /> </a></div>
                    <div class="leftseries">
                        <h4><a class="series" href="<?php the_permalink(); ?>" rel="68"><?php the_title(); ?></a>
                        </h4>
                        <span><b>Thể loại</b>:
                                <?= op_get_genres(', ') ?>
                            </span>
                        <div class="rt">
                            <div class="rating">
                                <div class="rating-prc">
                                    <div class="rtp">
                                        <div class="rtb"><span style="width:<?=(op_get_rating())*10?>%"></span></div>
                                    </div>
                                </div>
                                <div class="numscore"> <?= op_get_rating() ?></div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div>
