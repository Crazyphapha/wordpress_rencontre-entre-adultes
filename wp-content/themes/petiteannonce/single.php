<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="responsiveImg">
        <?php
        if (has_post_thumbnail()){
            the_post_thumbnail("thumbnail_annonce_small");
        }
        ?>
    </div>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>

<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>