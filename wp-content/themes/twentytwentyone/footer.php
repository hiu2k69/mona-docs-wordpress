<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<footer class="footer-m" style="background:#07070A; padding: 20px 0;">
    <div class="container pt-3">
        <div class="row">
            <div class="col-lg-3">
                <h5 class="text-white ttee">Monad social</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-61616D">Twitter</a></li>
                    <li><a href="#" class="text-61616D">Discord</a></li>
                    <li><a href="#" class="text-61616D">Website</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5 class="text-white ttee">Apply</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-61616D">Apply for content creator</a></li>
                    <li><a href="#" class="text-61616D">Apply for video editor</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5 class="text-white ttee">Monadhub.xyz</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-61616D">About</a></li>
                    <li><a href="#" class="text-61616D">Vision</a></li>
                </ul>
            </div>
            <div class="col-lg-3 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="Logo" class="img-logo-footer img-fluid">
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>

