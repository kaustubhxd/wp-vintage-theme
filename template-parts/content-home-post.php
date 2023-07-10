<?php

$offset = $args['sort-order'];
$type = $args['type'];
$limit = 1;
if ($type === 'listing') $limit = 10;

$query = xd_get_post($offset, $limit);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();
        // Retrieve the featured image URL
        $image_url = get_the_post_thumbnail_url($post_id, 'full');

        if ($type == 'fp-left') { // FP LEFT
?>
            <div>
                <a href="<?php the_permalink(); ?>">
                    <img style="width: 100%;" src="<?php echo esc_url($image_url) ?>" alt="Featured Image" />
                    <news-title>
                        <?php the_title(); ?>
                    </news-title>

                </a>
                <?php the_tags('<div class="tags"><p>', '', '</p></div>'); ?>


                <thin-print><?php the_author() ?> ● <?php echo get_the_date("l j M, Y g:i A") ?></thin-print>
            </div>
            <!-- <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="news-source"><?php the_author() ?></a> -->
        <?php } elseif ($type == 'fp-headline') {
        ?>
            <a href="<?php the_permalink(); ?>">
                <div class="news-image">
                    <img src="<?php echo esc_url($image_url) ?>" alt="Featured Image">
                </div>
            </a>
            <div class="news-details">

                <thin-print><?php the_author() ?> ● <?php echo get_the_date("l j M, Y g:i A") ?></thin-print>
                <?php the_tags('<div class="tags"><p>', '', '</p></div>'); ?>
                <!-- <a href="<?php the_permalink(); ?>" target="_blank" rel="noreferrer" class="news-source"><?php the_author() ?></a> -->
                <a href="<?php the_permalink(); ?>">
                    <news-title style="font-size: 30px;">
                        <?php the_title(); ?>
                    </news-title>
                    <div class="news-description fp-headline-excerpt"><?php the_excerpt() ?></div>
                </a>
            </div>
        <?php
        } elseif ($type === 'fp-right') {
        ?>
            <a href="<?php the_permalink(); ?>">
                <div class="news-image">
                    <img src="<?php echo esc_url($image_url) ?>" alt="Featured Image">
                </div>
            </a>
            <div class="news-details">
                <thin-print><?php the_author() ?> ● <?php echo get_the_date("l j M, Y g:i A") ?></thin-print>
                <?php the_tags('<div class="tags"><p>', '', '</p></div>'); ?>

                <!-- <a href="<?php the_permalink(); ?>" target="_blank" rel="noreferrer" class="news-source"><?php the_author() ?></a> -->
                <a href="<?php the_permalink(); ?>">
                    <news-title style="font-size: 20px;">
                        <?php the_title(); ?>
                    </news-title>
                    <div class="news-description fp-right-excerpt"><?php the_excerpt() ?></div>
                </a>
            </div>

        <?php } elseif ($type === 'fp-bottom') {
        ?>
            <a href="<?php the_permalink(); ?>">
                <div class="news-image fp-bottom-image">
                    <img src="<?php echo esc_url($image_url) ?>" alt="Featured Image">
                </div>
            </a>
            <div class="news-details fp-bottom-news-details">
                <thin-print><?php the_author() ?> ● <?php echo get_the_date("l j M, Y g:i A") ?></thin-print>
                <?php the_tags('<div class="tags"><p>', '', '</p></div>'); ?>

                <!-- <a href="<?php the_permalink(); ?>" target="_blank" rel="noreferrer" class="news-source"><?php the_author() ?></a> -->
                <a href="<?php the_permalink(); ?>">
                    <news-title style="font-size: 22px;">
                        <?php the_title(); ?>
                    </news-title>
                    <div class="news-description fp-bottom-excerpt"><?php the_excerpt() ?></div>
                </a>
            </div>

        <?php } elseif ($type === 'listing') {
        ?>
            <div class="fp-cell">
                <div class="other-news-wrap">
                    <a href="<?php the_permalink(); ?>">
                        <div class="float-image">
                            <img src="<?php echo esc_url($image_url) ?>" alt="Featured Image">
                        </div>
                    </a>
                    <div class="news-details">
                        <thin-print><?php the_author() ?> ● <?php echo get_the_date("l j M, Y g:i A") ?></thin-print>
                        <?php the_tags('<div class="tags"><p>', '', '</p></div>'); ?>
                        <!-- <a href="<?php the_permalink(); ?>" target="_blank" rel="noreferrer" class="news-source"><?php the_author() ?></a> -->
                        <a href="<?php the_permalink(); ?>">
                            <news-title>
                                <?php the_title(); ?>
                            </news-title>
                        </a>
                        <div class="news-description listing-excerpt"><?php the_excerpt() ?></div>
                    </div>


                </div>
            </div>
<?php
        }
    }
}
wp_reset_postdata();
?>