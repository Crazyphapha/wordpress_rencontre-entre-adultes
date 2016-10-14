<?php get_header(); //appel du template header.php ?>
<section id="main" class="container">
    <h1><?php bloginfo("title");?></h1>
    <h2><?php bloginfo('description');?></h2>
    <?php
    $args=array('post_type' => 'annonce');
    // The Query
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <article class="col-md-4" id="annonce-<?php the_ID();?>">
                <a href=<?php the_permalink();?>' title ="<?php the_title();?>"><h3><?php the_title();?></h3>
                    <div class="responsiveImg">
                        <?php
                            if (has_post_thumbnail()){
                                the_post_thumbnail("thumbnail_annonce_small");
                            }
                        ?>
                    </div>

                    <p>
                        <?php the_content();?>
                    </p>
                    <span class="genre"><strong>Genre: <?php the_field("genre");?></strong></span>
                    <?php echo var_dump(the_field('centres-interets'));?>
                    <span class="centres-interets"><strong>Centre d'interets:/><!--<?php the_field_multiple($field['centres-interets'], ', ', ' and ');?></strong></span>-->
                </a>




            </article>
            <?php
        }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    // no posts found
    }
    ?>

</section>
<div class="pagination">
    <?php wp_pagenavi(array('query' =>$the_query));?>
</div>
<?php get_footer(); //appel du template footer.php ?>
