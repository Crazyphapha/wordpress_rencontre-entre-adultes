<?php

/*
Template Name: Qui sommes nous
*/
?>

<?php get_header(); //appel du template header.php ?>

<?php the_field("statut_juridique"); ?>

<?php wp_reset_postdata();?>


<?php get_footer(); //appel du template footer.php ?>

