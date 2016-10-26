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
                <section>
                    <article class="col-md-4" id="annonce-<?php the_ID();?>">
                        <div class="profil">
                            <div class="responsiveImg">
                                <?php
                                if (has_post_thumbnail()){
                                    the_post_thumbnail("thumbnail_annonce_small");
                                }
                                ?>
                            </div>
                            <h3><?php the_title();?></h3>
                            <div class="content">
                                <div>
                                    <?php the_content();?>
                                </div>
                                <a href="<?php the_permalink();?>">La suite...</a>
                            </div>
                            <div class="profil-type">
                                <div class="genre">
                                    <strong>Genre: </strong>
                                    <?php the_field("genre"); ?>
                                <?php

                                    if (get_field("genre")== 'Homme'){
                                        echo ('<span class="glyphicons glyphicons-gender-male"></span>');
                                    }
                                    elseif(get_field("genre")== 'Femme'){
                                        echo ('<span class="glyphicons glyphicons-gender-female"></span>');
                                    }
                                    else{
                                        echo ('<span class="glyphicons glyphicons-gender-intersex"></span>');
                                    }

                                ?>
                                </div>
                                <div class="Passion">
                                    <strong>Passion: </strong>
                                    <?php the_field("passion"); ?>
                                </div>
                                <div class="ville">
                                    <strong>Ville: </strong>
                                    <?php the_field("ville"); ?>
                                </div>
                            </div>
                            <div class="btn-profil-container">
                                <a href="<?php the_permalink();?>" class="btn btn-info btn-profil" role="button">Voir son profil</a>
                            </div>
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
