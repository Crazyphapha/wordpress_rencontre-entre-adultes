        <footer class ="footer" id="footer">
            <div class="container">
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
                </nav>
            </div>
        </footer>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>