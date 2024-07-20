<article id="post-<?= get_the_ID(); ?>" class="post-<?= get_the_ID(); ?> hentry" itemscope="itemscope"
         itemtype="http://schema.org/Episode">
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
            ›
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                 href=""><span itemprop="name">Tập <?= episodeName() ?></span></a>
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </div>
    <div class="megavid">
        <div class="mvelement">
            <div class="item meta">
                <div class="tb" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                    <img src="<?= op_get_thumb_url() ?>"
                         class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy" width="169"
                         height="300" />
                    <meta itemprop="url"
                          content="<?= op_get_thumb_url() ?>">
                    <meta itemprop="width" content="190">
                    <meta itemprop="height" content="260">
                </div>
                <div class="lm">
                    <h1 class="entry-title" itemprop="name"><?php the_title(); ?> Tập <?= episodeName() ?></h1>

                    <div class="box-rating">
                        <div class="rate-title">
                            <span class="rate-lable"></span>
                        </div>
                        <div id="div_average" style="">
                                <span class="average" id="average" itemprop="ratingValue">
                                   <?= op_get_rating() ?>
                                </span>
                            điểm
                            /
                            <span id="rate_count" itemprop="reviewCount"> <?= op_get_rating_count() ?></span> lượt đánh giá
                        </div>
                        <div id="star" data-score=" <?= op_get_rating() ?>"
                             style="cursor: pointer;">
                        </div>
                        <div>
                            <span id="hint"></span>
                            <meta itemprop="bestRating" content="10" />
                            <meta itemprop="worstRating" content="1" />
                            <meta itemprop="ratingValue" content=" <?= op_get_rating() ?>" />
                            <meta itemprop="ratingCount" content="<?= op_get_rating_count() ?>" />
                        </div>
                    </div>
                    <span class="epx"> <span class="lg"><?= op_get_lang() ?></span></span> <span
                            class="year"> <i class="status Hard Sub"><?= op_get_lang() ?></i>  <span
                                id="ts-ep-view"><?= op_get_post_view() ?> lượt xem</span></span>
                </div>
                <div class="sosmed"><a
                            href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>"
                            aria-label="Share on Facebook"><span class="fab fa-facebook-f" aria-hidden="true"></span></a> <a
                            href="https://www.twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"
                            aria-label="Share on Twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a> <a
                            href="whatsapp://send?text=<?php the_title(); ?> <?php the_permalink(); ?>"
                            aria-label="Share on Whatsapp"><span class="fab fa-whatsapp" aria-hidden="true"></span></a>
                </div>
            </div>
            <?php if (op_get_notify()) { ?>
                        <div class="desc"><strong>Thông báo: </strong><?= op_get_notify() ?>
                        </div>
                        <?php } ?>
                        <?php if (op_get_showtime_movies()) { ?>
                        <div class="desc"><strong>Lịch chiếu: </strong><?= op_get_showtime_movies() ?>
                        </div>   <?php } ?>
            <div class="video-content">
                <div class="lowvid">
                    <div class="media-player" id="pembed">
                        <p style="text-align: center;">Đang tải, đợi tí nhé ...</p>
                    </div>
                </div>
            </div>
            <div class="item video-nav">
                <div class="mobius">
                    <div class="iconx">
                        <div class="icol report">
                            <i class="fa fa-bug"></i>
                            <span>Báo Lỗi</span>
                        </div>
                        <div class="icol expand">
                            <i class="fa fa-expand" aria-hidden="true"></i>
                            <span>Expand</span>
                        </div>
                        <div class="icol light">
                            <i class="far fa-lightbulb"></i>
                            <span>Turn Off Light</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="change-server">
        <center>
            <ul class="server-list">
                <li class="backup-server"> <span class="server-title">Đổi Nguồn Phát</span>
                    <ul class="list-episode">
                        <li class="episode">
                            <a data-id="<?= episodeName() ?>" data-link="<?= m3u8EpisodeUrl() ?>"
                               data-type="m3u8" onclick="chooseStreamingServer(this)"
                               class="streaming-server btn-link-backup btn-episode black episode-link">Nguồn Phát
                                #1</a>
                            <a data-id="<?= episodeName() ?>" data-link="<?= embedEpisodeUrl() ?>"
                               data-type="embed" onclick="chooseStreamingServer(this)"
                               class="streaming-server btn-link-backup btn-episode black episode-link">Nguồn Phát
                                #2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </center>
    </div>

    <div id="mobilepisode"></div>
    <div class="single-info bixbox">
        <div class="thumb"><img
                    src="<?= op_get_thumb_url() ?>"
                    class="ts-post-image wp-post-image attachment-medium size-medium" loading="lazy" itemprop="image"
                    title="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="169" height="300" /></div>
        <div class="infox">
            <div class="infolimit">
                <h2 itemprop="partOfSeries"><?php the_title(); ?></h2> <span class="alter">Tên khác: <?= op_get_original_title() ?></span>
            </div>
            <div class="rating"><strong>Rating <?=  number_format(op_get_rating(), 1) == 0.0 ? '8.0' : number_format(op_get_rating(), 1) ?></strong>
                <div class="rating-prc">
                    <div class="rtp">
                        <div class="rtb"><span style="width:<?=  (number_format(op_get_rating(), 1) == 0.0 ? '8.0' : number_format(op_get_rating(), 1)) * 10 ?>%"></span></div>
                    </div>
                </div>
            </div>
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
                
                <div class="desc mindes"><?php the_content() ?><span class="colap"></span>
                </div>
            </div>
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
add_action('wp_footer', function () {?>
    <script>
        $(document).ready(function() {
            $("#shadow").css("height", $(document).height()).hide();
            $(".light").click(function() {
                $("#shadow").toggle();
                if ($("#shadow").is(":hidden")) {
                    $(".video-content").css({'z-index':'0'})
                    $(this).html(
                        "<i class='far fa-lightbulb' aria-hidden='true'></i> <span>Turn Off Light</span>")
                        .removeClass("turnedOff");
                } else {
                    $(".video-content").css({'z-index':'1000'})
                    $(this).html(
                        "<i class='fas fa-lightbulb' aria-hidden='true'></i> <span>Turn On Light</span>")
                        .addClass("turnedOff");
                }

            });

        });
    </script>


    <script src="<?= get_template_directory_uri() ?>/assets/player/js/p2p-media-loader-core.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/player/js/p2p-media-loader-hlsjs.min.js"></script>
    <?php op_jwpayer_js(); ?>


    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/jquery.raty.js"></script>

    <script>
        var rated = false;
        $('#star').raty({
            score: <?= op_get_rating() ?>,
        number: 10,
            numberMax: 10,
            hints: ['quá tệ', 'tệ', 'không hay', 'không hay lắm', 'bình thường', 'xem được', 'có vẻ hay', 'hay',
            'rất hay', 'siêu phẩm'
        ],
            starOff: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-off.png',
            starOn: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-on.png',
            starHalf: '<?= get_template_directory_uri() ?>/assets/plugins/jquery-raty/images/star-half.png',
            click: function(score, evt) {
            if (rated) return
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php')?>',
                    type: 'POST',
                    data:{
                        action: "ratemovie",
                        rating: score,
                        postid: '<?php echo get_the_ID(); ?>',
                    },
                }).done(function (data) {
                    $('#rate_count').html(data.rating_count);
                    $('#average').html(data.rating_star);
                    rated = true;
                    $('#star').data('raty').readOnly(true);
                });

        }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('html, body').animate({
                scrollTop: $('.megavid').offset().top
            }, 'slow');
        });
    </script>

    <script>
        var episode_id = '<?= episodeName() ?>';
        const wrapper = document.getElementById('pembed');
        const vastAds = "<?= get_option('ophim_jwplayer_advertising_file') ?>";

        function chooseStreamingServer(el) {
            const type = el.dataset.type;
            const link = el.dataset.link.replace(/^http:\/\//i, 'https://');
            const id = el.dataset.id;

            episode_id = id;


            Array.from(document.getElementsByClassName('streaming-server')).forEach(server => {
                server.classList.remove('active');
            })
            el.classList.add('active');

            renderPlayer(type, link, id);
        }

        function renderPlayer(type, link, id) {
            if (type == 'embed') {
                if (vastAds) {
                    wrapper.innerHTML = `<div id="fake_jwplayer"></div>`;
                    const fake_player = jwplayer("fake_jwplayer");
                    const objSetupFake = {
                        key: "<?= get_option('ophim_jwplayer_license', 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=') ?>",
                        aspectratio: "16:9",
                        width: "100%",
                        file: "<?= get_template_directory_uri() ?>/assets/player/1s_blank.mp4",
                        volume: 100,
                        mute: false,
                        autostart: true,
                        advertising: {
                            tag: "<?= get_option('ophim_jwplayer_advertising_file') ?>",
                            client: "vast",
                            vpaidmode: "insecure",
                            skipoffset: <?= get_option('ophim_jwplayer_advertising_skipoffset') ?:  5 ?>, // Bỏ qua quảng cáo trong vòng 5 giây
                            skipmessage: "Bỏ qua sau xx giây",
                            skiptext: "Bỏ qua"
                        }
                    };
                    fake_player.setup(objSetupFake);
                    fake_player.on('complete', function(event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });

                    fake_player.on('adSkipped', function(event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });

                    fake_player.on('adComplete', function(event) {
                        $("#fake_jwplayer").remove();
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                        fake_player.remove();
                    });
                } else {
                    if (wrapper) {
                        wrapper.innerHTML = `<iframe width="100%" height="100%" src="${link}" frameborder="0" scrolling="no"
                    allowfullscreen="" allow='autoplay'></iframe>`
                    }
                }
                return;
            }

            if (type == 'm3u8' || type == 'mp4') {
                wrapper.innerHTML = `<div id="jwplayer"></div>`;
                const player = jwplayer("jwplayer");
                const objSetup = {
                    key: "<?= get_option('ophim_jwplayer_license', 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=') ?>",
                    aspectratio: "16:9",
                    width: "100%",
                    image: "<?= op_get_poster_url() ?>",
                    file: link,
                    playbackRateControls: true,
                    playbackRates: [0.25, 0.75, 1, 1.25],
                    sharing: {
                        sites: [
                            "reddit",
                            "facebook",
                            "twitter",
                            "googleplus",
                            "email",
                            "linkedin",
                        ],
                    },
                    volume: 100,
                    mute: false,
                    autostart: true,
                    logo: {
                        file: "<?= get_option('ophim_jwplayer_logo_file') ?>",
                        link: "<?= get_option('ophim_jwplayer_logo_link') ?>",
                        position: "<?= get_option('ophim_jwplayer_logo_position') ?>",
                    },
                    advertising: {
                        tag: "<?= get_option('ophim_jwplayer_advertising_file') ?>",
                        client: "vast",
                        vpaidmode: "insecure",
                        skipoffset: <?= get_option('ophim_jwplayer_advertising_skipoffset') ?:  5 ?>, // Bỏ qua quảng cáo trong vòng 5 giây
                        skipmessage: "Bỏ qua sau xx giây",
                        skiptext: "Bỏ qua"
                    }
                };

                if (type == 'm3u8') {
                    const segments_in_queue = 50;

                    var engine_config = {
                        debug: !1,
                        segments: {
                            forwardSegmentCount: 50,
                        },
                        loader: {
                            cachedSegmentExpiration: 864e5,
                            cachedSegmentsCount: 1e3,
                            requiredSegmentsPriority: segments_in_queue,
                            httpDownloadMaxPriority: 9,
                            httpDownloadProbability: 0.06,
                            httpDownloadProbabilityInterval: 1e3,
                            httpDownloadProbabilitySkipIfNoPeers: !0,
                            p2pDownloadMaxPriority: 50,
                            httpFailedSegmentTimeout: 500,
                            simultaneousP2PDownloads: 20,
                            simultaneousHttpDownloads: 2,
                            // httpDownloadInitialTimeout: 12e4,
                            // httpDownloadInitialTimeoutPerSegment: 17e3,
                            httpDownloadInitialTimeout: 0,
                            httpDownloadInitialTimeoutPerSegment: 17e3,
                            httpUseRanges: !0,
                            maxBufferLength: 300,
                            // useP2P: false,
                        },
                    };
                    if (Hls.isSupported() && p2pml.hlsjs.Engine.isSupported()) {
                        var engine = new p2pml.hlsjs.Engine(engine_config);
                        player.setup(objSetup);
                        jwplayer_hls_provider.attach();
                        p2pml.hlsjs.initJwPlayer(player, {
                            liveSyncDurationCount: segments_in_queue, // To have at least 7 segments in queue
                            maxBufferLength: 300,
                            loader: engine.createLoaderClass(),
                        });
                    } else {
                        player.setup(objSetup);
                    }
                } else {
                    player.setup(objSetup);
                }


                const resumeData = 'OPCMS-PlayerPosition-' + id;
                player.on('ready', function() {
                    if (typeof(Storage) !== 'undefined') {
                        if (localStorage[resumeData] == '' || localStorage[resumeData] == 'undefined') {
                            console.log("No cookie for position found");
                            var currentPosition = 0;
                        } else {
                            if (localStorage[resumeData] == "null") {
                                localStorage[resumeData] = 0;
                            } else {
                                var currentPosition = localStorage[resumeData];
                            }
                            console.log("Position cookie found: " + localStorage[resumeData]);
                        }
                        player.once('play', function() {
                            console.log('Checking position cookie!');
                            console.log(Math.abs(player.getDuration() - currentPosition));
                            if (currentPosition > 180 && Math.abs(player.getDuration() - currentPosition) >
                                5) {
                                player.seek(currentPosition);
                            }
                        });
                        window.onunload = function() {
                            localStorage[resumeData] = player.getPosition();
                        }
                    } else {
                        console.log('Your browser is too old!');
                    }
                });

                player.on('complete', function() {
                    <?php if(nextEpisodeUrl()){ ?>
                    window.location.href = "<?= nextEpisodeUrl() ?>";
                    <?php }?>
                    if (typeof(Storage) !== 'undefined') {
                        localStorage.removeItem(resumeData);
                    } else {
                        console.log('Your browser is too old!');
                    }
                })

                function formatSeconds(seconds) {
                    var date = new Date(1970, 0, 1);
                    date.setSeconds(seconds);
                    return date.toTimeString().replace(/.*(\d{2}:\d{2}:\d{2}).*/, "$1");
                }
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const episode = '<?= episodeName() ?>';
            let playing = document.querySelector(`[data-id="${episode}"]`);
            if (playing) {
                playing.click();
                return;
            }

            const servers = document.getElementsByClassName('streaming-server');
            if (servers[0]) {
                servers[0].click();
            }
        });
    </script>

    <script>
        $(".report").click(() => {
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php')?>',
                type: 'POST',
                data:{
                    action: "reportbug",
                    message:  '',
                    postid: '<?php echo get_the_ID(); ?>',
                },
            }).done(function (data) {
                alert('Gửi báo lỗi thành công')
                $(".report").remove();
            });

        })
    </script>

<?php }) ?>