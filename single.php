<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    get_header();

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $post_id = get_the_ID();
            // Retrieve the featured image URL
            $image_url = get_the_post_thumbnail_url($post_id, 'full');
    ?>
            <div class="article-wrap">
                <news-title><?php the_title() ?></news-title>
                <div class="news-description post-description"><?php the_excerpt() ?></div>
                <thin-print><?php the_author() ?> ● <?php echo get_the_date("l j M, Y g:i A") ?></thin-print>
                <?php the_tags('<span class="tags"><p>', '', '</p></span>'); ?>

                <div class="news-img-container">
                    <img class="news-img" src="<?php echo esc_url($image_url) ?>" alt="Featured Image" />
                </div>
                <div class="news-content">
                    <?php the_content() ?>
                </div>
                <!-- <a href="https://zeenews.india.com/cricket/live-updates/live-cricket-score-sl-vs-wi-icc-odi-world-cup-qualifiers-2023-super-sixes-match-33-today-sri-lanka-vs-west-indies-cwc-2023-qualifiers-harare-sports-club-dasun-shanaka-shae-hope-2631859" target="_blank" rel="noreferrer" class="news-source">Read full article from India.com</a> -->
            </div>

    <?php }
    } ?>

</body>

</html>