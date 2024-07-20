<div class="section">
    <div class="releases">
        <h3><?= $title; ?></h3>
    </div>
    <span class="ts-ajax-cache">
        <div class='ongoingseries'>
            <ul>
              <?php $loop =0; while ($query->have_posts()) : $query->the_post(); $loop++; ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> <?= op_get_year() ?>">
                            <span class="l"><i class="fas fa-angle-right"></i> <?php the_title(); ?></span>
                            <span class="r"> <?= op_get_year() ?> </span>
                        </a>
                    </li>
              <?php endwhile; ?>
            </ul>
        </div>
    </span>
</div>
