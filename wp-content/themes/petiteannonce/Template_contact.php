<?php

/*
Template Name: contact
*/
?>
<?php get_header(); //appel du template header.php ?>

<?php
$args=array('page_id' => '45');
// The Query
$the_query = new WP_Query( $args );

// The Loop
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
    }
}
?>
<div class="contact-form">
    <?php the_content();?>
</div>
    <?php wp_reset_postdata();?>





<?php get_footer(); //appel du template footer.php ?>
