<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>

<body>

    <header>
        <div class="masthead-box">
            <div class="paper-name-box">
                <div class="weather"></div>
                <div class="paper-name">
                    <a href="<?php echo site_url() ?>">
                        <h1><?php echo get_bloginfo('name'); ?></h1>
                    </a>
                </div>
                <div class="search-box">
                    <img class="search-icon" src="<?php bloginfo('template_url'); ?>/assets/images/search-icon.svg" alt="🔍" />
                </div>

                <div class="search-box-container">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search news', 'placeholder', 'textdomain'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                        <button type="submit" class="search-submit"><?php echo esc_html_x('Search', 'submit button', 'textdomain'); ?></button>
                    </form>
                </div>


            </div>
            <div class="paper-calendar">
                <?php
                $current_time = current_time('timestamp');
                $formatted_time = date('l F j, Y', $current_time);
                echo $formatted_time;
                ?> - <?php
                        $count_posts = wp_count_posts();

                        $published_posts = $count_posts->publish;
                        echo numberToWords($published_posts)
                        ?> Articles</div>
        </div>
    </header>