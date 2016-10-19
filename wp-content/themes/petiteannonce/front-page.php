<?php get_header(); //appel du template header.php ?>
<section id="main" class="container">
    <div class="jumbotron text-center">
        <?php
            $args=array('page_id' => '22');
            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                }
            }
        ?>
        <p>
            <?php the_content();?>
            <?php wp_reset_postdata();?>
        </p>
    </div>
    <?php
        $args=array('post_type' => 'annonce');
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                ?>
                <section class="profile">
                <article class="col-md-4" id="annonce-<?php the_ID();?>">

                    <div class="responsiveImg">
                        <?php
                        if (has_post_thumbnail()){
                            the_post_thumbnail("thumbnail_annonce_small");
                        }
                        ?>
                    </div>
                    <h3><?php the_title();?></h3>
                    <p>
                        <?php the_content();?>
                    </p>
                    <div class="">
                    <div class="genre">
                        <strong>Genre: </strong>
                        <?php the_field("genre"); ?>
                    </div>
                    <div class="centres-interets">
                        <strong>Centre d&#39;interets: </strong>
                        <?php the_field("centres_interets"); ?>
                    </div>
                    </div>
                    <div class="btn-profil-container">
                        <a href="<?php the_permalink();?>" class="btn btn-default btn-profil" role="button">Voir son profil</a>
                    </div>



                </article>
                </section>
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
