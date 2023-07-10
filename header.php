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
                    <h1><?php echo get_bloginfo('name'); ?></h1>
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