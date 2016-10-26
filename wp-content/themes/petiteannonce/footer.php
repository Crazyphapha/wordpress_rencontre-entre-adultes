<div class="footer">
    <div class="footer-widgets-container">
        <div class="footer-widget">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
            <?php endif; ?>
        </div>

        <div class="footer-widget">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
            <?php endif; ?>
        </div>

        <div class="footer-widget">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
            <?php endif; ?>
        </div>
    </div>
</div>


        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>