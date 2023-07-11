<?php
get_header();

?>

<div class="tag-title">Showing tags for <?php echo "'" . single_tag_title('', false) . "'"; ?> </div>

<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        $post_id = get_the_ID();
        // Retrieve the featured image URL
        $image_url = get_the_post_thumbnail_url($post_id, 'full');
?>
        <div class="fp-cell tag-listing">
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

<?php }
}

get_header();

// Get the current page number
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Get the number of posts per page
$posts_per_page = get_option('posts_per_page');

// Get the total number of posts in the tag
$total_posts = $wp_query->found_posts;

// Calculate the starting and ending post numbers
$start_post = (($paged - 1) * $posts_per_page) + 1;
$end_post = min($paged * $posts_per_page, $total_posts);
?>



<div class="tag-pagination-body">
    <div><?php echo '<p>Showing ' . $start_post . ' to ' . $end_post . ' of ' . $total_posts . '</p>'; ?></div>
    <div class="tag-pagination"><?php echo paginate_links() ?> </div>
</div>

<?php get_footer()

?>