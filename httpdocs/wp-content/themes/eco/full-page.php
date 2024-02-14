<?php
/*
Template Name: page-full
*/
?>

<?php get_header(); ?>

<div class="container-full full-page">
            <?php
            while (have_posts()) : the_post(); ?>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            <?php
            endwhile; 
            ?>
</div>

<?php get_footer(); ?>
