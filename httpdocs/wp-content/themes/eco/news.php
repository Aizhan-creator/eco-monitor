<?php
/*
Template Name: news
*/
?>
<?php get_header(); ?>
<div class="container news-page">
    <div class="row">
        <div class="col s12">
            <div class="col s12 m12">
                <h2>Новости</h2>
            </div>
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => -1,
            );
            $news_query = new WP_Query($args);

            if ($news_query->have_posts()) :
                $counter = 0;
                while ($news_query->have_posts()) : $news_query->the_post();
            ?>
                <div class="col s12 m4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="card-content">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="card-action">
                            <a href="<?php the_permalink(); ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php
                    $counter++;
                    //if ($counter % 3 == 0) {
                        //echo '</div><div class="row">';
                    //}
                endwhile;
                wp_reset_postdata();
            else :
                echo 'Новости не найдены.';
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
