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
                    the_post(); ?>
                    <div class="row" style="margin-bottom: 20px">
                        <div class="col-md-12 blogShort">

                            <a href="<?php the_permalink(); ?>"><img style="width: 150px;margin-right: 15px" src="<?= op_remove_domain(get_the_post_thumbnail_url()) ?>"
                                                                     alt="<?php the_title(); ?>" class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
                            <br>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <article>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p></article>
                            <a class="btn btn-blog pull-right marginBottom10" href="<?php the_permalink(); ?>">Xem thêm</a>
                        </div>

                    </div>
                <?php }
                wp_reset_postdata();
            } ?>
        </div>

        <?php ophim_pagination(); ?>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>

<?php
get_footer();
?>
