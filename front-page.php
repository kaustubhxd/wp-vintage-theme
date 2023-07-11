<?php get_header() ?>

<?php
function xd_get_post($offset = 0, $limit = 1)
{
    $args = array(
        'posts_per_page' => $limit, // Retrieve only 1 post
        'offset' => $offset, // Skip the first post
    );
    $query = new WP_Query($args);
    return $query;
}

?>

<div>
    <div class="container">
        <div class="frontpage">

            <div class="fp-cell fp-cell--2">
                <div class="fp-item">
                    <div class="center-news-wrap">
                        <?php get_template_part(
                            'template-parts/content',
                            'home-post',
                            array(
                                'type' => 'fp-headline',
                                'sort-order' => '0',
                            )
                        ); ?>
                    </div>
                </div>
            </div>
            <div class="fp-cell fp-cell--3">
                <div class="fp-cell fp-cell--X">
                    <div class="fp-item">
                        <div class="center-news-wrap">

                            <?php get_template_part(
                                'template-parts/content',
                                'home-post',
                                array(
                                    'type' => 'fp-right',
                                    'sort-order' => '1',
                                )
                            ); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="fp-cell fp-cell--4">
                <div class="fp-cell fp-cell--5">
                    <div class="fp-item">
                        <div class="center-news-wrap">
                            <?php get_template_part(
                                'template-parts/content',
                                'home-post',
                                array(
                                    'type' => 'fp-bottom',
                                    'sort-order' => '2',
                                )
                            ); ?>

                        </div>
                    </div>
                </div>
                <div class="fp-cell fp-cell--6">
                    <div class="fp-item">
                        <div class="center-news-wrap">
                            <?php get_template_part(
                                'template-parts/content',
                                'home-post',
                                array(
                                    'type' => 'fp-bottom',
                                    'sort-order' => '3',
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="fp-cell fp-cell--7">
                    <div class="fp-item">
                        <div class="center-news-wrap">
                            <?php get_template_part(
                                'template-parts/content',
                                'home-post',
                                array(
                                    'type' => 'fp-bottom',
                                    'sort-order' => '4',
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fp-cell fp-cell--1">
                <div class="fp-cell fp-cell--A">
                    <div class="side-news-wrap">
                        <div class="news-details">
                            <?php get_template_part(
                                'template-parts/content',
                                'home-post',
                                array(
                                    'type' => 'fp-left',
                                    'sort-order' => '5',
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="fp-cell fp-cell--B">
                    <div class="side-news-wrap">
                        <div class="news-details">
                            <?php get_template_part(
                                'template-parts/content',
                                'home-post',
                                array(
                                    'type' => 'fp-left',
                                    'sort-order' => '6',
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="fp-cell fp-cell--C">
                    <div class="side-news-wrap">
                        <div class="news-details">
                            <?php get_template_part(
                                'template-parts/content',
                                'home-post',
                                array(
                                    'type' => 'fp-left',
                                    'sort-order' => '7',
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="other-pages">
            <?php get_template_part(
                'template-parts/content',
                'home-post',
                array(
                    'type' => 'listing',
                    'sort-order' => '8',
                )
            ); ?>

        </div>
    </div>
</div>
</div>
</div>

<?php get_footer() ?>