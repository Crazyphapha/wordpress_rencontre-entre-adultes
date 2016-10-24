        <footer class ="footer" id="footer">
            <section>
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
                </nav>
            </section>
        </footer>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>