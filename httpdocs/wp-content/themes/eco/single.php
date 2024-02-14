<?php get_header(); ?>

<div class="container page-container">
    <div class="row">
        <div class="col s12">
            <?php
            while (have_posts()) : the_post();
                ?>
                <h4><?php the_title(); ?></h4>
                <?php the_post_thumbnail(); ?>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            <?php
            endwhile; 
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
