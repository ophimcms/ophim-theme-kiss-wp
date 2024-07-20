<?php
get_header();
?>
<div class="bixbox bixboxarc bbnofrm">
    <div class="releases">
        <h1><span> <?= single_tag_title(); ?></span></h1>
    </div>
    <div class="mrgn">
        <div class="clear"></div>
        <div class="listupd">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();?>

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
               <?php } wp_reset_postdata();  }
            else { ?>
                <p>Không có dữ liệu cho mục này!</p>
            <?php } ?>
        </div>

        <?php ophim_pagination(); ?>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>

<?php
get_footer();
?>
