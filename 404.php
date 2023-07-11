<?php
get_header();
?>

<div class="not-found-body">
    <img class="not-found-image" src="<?php bloginfo('template_url'); ?>/assets/images/newspaper.svg" alt="" />
    <p class="not-found-text">
        Oops! Looks like the ink has run dry on this page.
        The news you were after has gone missing.
        While we search for clues, feel free to browse other captivating stories
    </p>
    <a href="<?php echo site_url() ?>">
        <button class="not-found-home-button"><?php echo esc_html_x('Go to Homepage', 'submit button', 'textdomain'); ?></button>
    </a>


</div>

<?php get_footer() ?>