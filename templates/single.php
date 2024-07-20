<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/jquery.fancybox.min.css">
<article id="post-<?= get_the_ID(); ?>" class="post-<?= get_the_ID(); ?> hentry" itemscope="itemscope"
         itemtype="http://schema.org/CreativeWorkSeries">
    <div class="ts-breadcrumb bixbox">
        <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                 href="/"><span itemprop="name">Xem phim</span></a>
                <meta itemprop="position" content="1">
            </li>
            ›
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                 href="<?php the_permalink(); ?>"><span itemprop="name"><?php the_title(); ?></span></a>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>
    <div class="bixbox animefull">
        <div class="bigcover">
            <div class="ime"><a href="<?= watchUrl() ?>" class="lnk"></a> <img
                        src="<?= op_get_poster_url() ?>" alt="<?php the_title(); ?>" />
            </div>
             <?php if (watchUrl()) { ?>
            <a href="<?= watchUrl() ?>" class="gp"><i class="far fa-play-circle" aria-hidden="true"></i></a>
             <?php } ?>
        </div>
        <div class="bigcontent">
            <div class="thumbook">
                <div class="thumb" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                    <img src="<?= op_get_thumb_url() ?>"
                         class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail" loading="lazy"
                         itemprop="image" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"
                         width="900" height="1594" />
                </div>
                <div class="rt">
                    <div class="rating"><strong>Rating
                            <?=  number_format(op_get_rating(), 1) == 0.0 ? '8.0' : number_format(op_get_rating(), 1) ?></strong>
                        <div class="rating-prc" itemscope="itemscope" itemprop="aggregateRating"
                             itemtype="//schema.org/AggregateRating">
                            <meta itemprop="ratingValue"
                                  content="<?=  number_format(op_get_rating(), 1) == 0.0 ? '8.0' : number_format(op_get_rating(), 1) ?>">
                            <meta itemprop="worstRating" content="1">
                            <meta itemprop="bestRating" content="10">
                            <meta itemprop="ratingCount"
                                  content="<?=  number_format(op_get_rating(), 1) == 0.0 ? '8.0' : number_format(op_get_rating(), 1) ?>">
                            <div class="rtp">
                                <div class="rtb"><span
                                            style="width:<?=  (number_format(op_get_rating(), 1) == 0.0 ? '8.0' : number_format(op_get_rating(), 1)) * 10 ?>%"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (op_get_trailer_url()) { ?>
                    <a data-fancybox href="<?= op_get_trailer_url() ?>" class="trailerbutton"> <i
                                class="fab fa-youtube"></i> Trailer </a>
                    <?php } ?>
                      <?php if (watchUrl()) { ?>
                    <a style="display: block" href="<?= watchUrl() ?>" class="bookmark"><i
                                class="far fa-play-circle" aria-hidden="true"></i> Xem Phim</a>
                      <?php } ?>
                </div>
            </div>
            <div class="infox">
                <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
                <div class="ninfo">
                    <span class="alter">Tên khác: <?= op_get_original_title() ?></span>
                    <div class="info-content">
                        <div class="spe">
                                <span>
                                    <b>Status:</b> <?= op_get_status() ?> </span>
                            <span class="split">
                                    <b>Năm phát hành:</b> <?= op_get_year() ?> </span>
                            <span>
                                    <b>Thời lượng:</b> <?= op_get_runtime() ?> </span>
                            <span>
                                    <b>Quốc gia:</b>
                                     <?= op_get_regions(', ') ?>
                                </span>
                         
                            <span>
                                    <b>Số tập:</b> <?= op_get_episode() ?> </span>
                            <span class="split">
                                    <b>Đạo diễn:</b>
                                    <?= op_get_directors(10,', ') ?>
                                </span>
                            <span class="split">
                                    <b>Diễn viên:</b>
                                      <?= op_get_actors(100,', ') ?>
                                </span>
                            <span class="split">
                                    <b>Chất lượng:</b>
                                    <?= op_get_quality() ?> <?= op_get_lang() ?>
                                </span>
                        </div>
                        <?php if (op_get_notify()) { ?>
                        <div class="desc"><strong>Thông báo: </strong><?= op_get_notify() ?>
                        </div>
                        <?php } ?>
                        <?php if (op_get_showtime_movies()) { ?>
                        <div class="desc"><strong>Lịch chiếu: </strong><?= op_get_showtime_movies() ?>
                        </div>
                        <?php } ?>
                        <div class="desc">
                            Xem phim <?php the_title(); ?> có phụ đề tiếng việt trên <?php bloginfo('name'); ?>.
                            Bạn cũng có thể tải xuống <?php the_title(); ?> vietsub miễn phí, đừng quên xem phát
                            trực tuyến với nhiều chất lượng khác nhau 720P 360P 240P 480P (nếu có) tùy theo đường truyền
                            của bạn để tiết kiệm dung lượng internet. Hãy chia sẻ <?php the_title(); ?> trên
                            <?php bloginfo('name'); ?> tới mọi người để cùng thưởng thức nhé.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom tags">
            <?= op_get_tags(' ') ?>
        </div>
    </div>
    <div class='socialts'>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>"
           target="_blank" class="fb"> <i class="fab fa-facebook-f"></i> <span>Facebook</span> </a> <a
                href="https://www.twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"
                target="_blank" class="twt"> <i class="fab fa-twitter"></i> <span>Twitter</span> </a> <a
                href="whatsapp://send?text=<?php the_title(); ?> <?php the_permalink(); ?>" target="_blank"
                class="wa"> <i class="fab fa-whatsapp"></i> <span>WhatsApp</span> </a> <a
                href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?= op_get_thumb_url() ?>&description=<?php the_title(); ?>"
                target="_blank" class="pntrs"> <i class="fab fa-pinterest-p"></i> <span>Pinterest</span>
        </a>
    </div>
    <div class="bixbox synp">
        <div class="releases">
            <h2>Thông tin phim <?php the_title(); ?></h2>
        </div>
        <div class="entry-content" itemprop="description">
            <?php the_content() ?>
        </div>
    </div>
    
    <div class="bixbox">
        <div class="releases"><h3><span>Bình luận</span></h3></div>
        <div class="cmt commentx">
            <div class="box-comment" id="tabs-facebook" style="background: linear-gradient(to right, #ffff, #ffff);">
                <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                 data-numposts="5" data-colorscheme="light" data-lazy="true">
            </div>
            </div>
        </div>
    </div>

    <div class="bixbox">
        <div class="releases"><h3>Phim cùng thể loại</h3></div>
        <div class="series-gen">
            <div class="listupd">
                <div id="series-390" class="tab-pane active">
                    <?php
                    $postType = 'ophim';
                    $taxonomyName = 'ophim_genres';
                    $taxonomy = get_the_terms(get_the_id(), $taxonomyName);
                    if ($taxonomy) {
                        $category_ids = array();
                        foreach ($taxonomy as $individual_category) $category_ids[] = $individual_category->term_id;
                        $args = array('post_type' => $postType, 'post__not_in' => array(get_the_id()), 'posts_per_page' => 10, 'tax_query' => array(array('taxonomy' => $taxonomyName, 'field' => 'term_id', 'terms' => $category_ids,),));
                        $my_query = new wp_query($args);

                        if ($my_query->have_posts()):
                            while ($my_query->have_posts()):$my_query->the_post(); ?>
                                <article class="bs" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                                    <div class="bsx"><a href="<?php the_permalink(); ?>" itemprop="url"
                                                        title="<?php the_title(); ?> (<?= op_get_original_title() ?>) [<?= op_get_year() ?>]"
                                                        class="tip" rel="<?= get_the_ID(); ?>">
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
                                                <div class="tt"> <?php the_title(); ?><h2 itemprop="headline">
                                                        <?= op_get_original_title() ?> <?= op_get_episode() ?></h2>
                                                </div>
                                                <div class="timeago"> <?= op_get_original_title() ?></div>
                                            </div>
                                        </a></div>
                                </article>
                            <?php endwhile;
                        endif;
                        wp_reset_query();
                    }
                    ?>
                   
                </div>
            </div>
        </div>
    </div>

</article>

<?php
add_action('wp_footer', function (){?>
    <script type='text/javascript' src='<?= get_template_directory_uri() ?>/assets/js/jquery.fancybox.min.js' id='fancybox-js'></script>
<?php }) ?>