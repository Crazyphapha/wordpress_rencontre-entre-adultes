        <footer class ="footer container" id="footer">
            <div class="footer-container">
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
                </nav>
            </div>
        </footer>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>