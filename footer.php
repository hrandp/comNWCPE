<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<?php get_template_part('widget-templates/footerfull'); ?>
    <div class="wrapper wrapper-border-footer" id="wrapper-footer">
        
        <div class="container">

            <div class="row">

                <div class="col-md-12">
        
                    <footer id="colophon" class="site-footer" role="contentinfo">
                    
                        <div class="col-md-4 text-center">
                            <h3 class="text-white">Register for email newsletter</h3>
                            <p class="text-lightGray">Stay in the loop with both new thought leadership trends and future courses.</p>
                            <div class="space-small"></div>
                            <?php echo do_shortcode( '[contact-form-7 id="1881" title="footer" class="footer-email-gen"]' ); ?>
                        </div>
                        <div class="space visible-xs"></div>
                        <div class="col-md-4 text-center">
                            <h3 class="text-white">Follow Social Media</h3>
                            <p class="text-lightGray">Follow us on social media as a way to stay connected to our daily updates.</p>
                            <div class="space-small"></div>
                            <ul class="footer-social-icons">
                                <li><a href="https://www.linkedin.com/company/3630432?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A3630432%2Cidx%3A1-1-1%2CtarId%3A1464569302853%2Ctas%3ANWCPE"><img src="<?php echo get_template_directory_uri(); ?>/img/nwcpe-icon-linkedin-in.png" alt="LinkedIn NWCPE"></a></li>
                                <li><a href="https://plus.google.com/+NwcpeConsulting/posts"><img src="<?php echo get_template_directory_uri(); ?>/img/nwcpe-icon-google-plus.png" alt="Google+ NWCPE"></a></li>
                                <li><a href="http://www.slideshare.net/SteveZagarola"><img src="<?php echo get_template_directory_uri(); ?>/img/nwcpe-icon-slide-share.png" alt="SlideShare NWCPE"></a></li>
                            </ul>
                        </div>
                        <div class="space visible-xs"></div>
                        <div class="col-md-4 text-center">
                            <h3 class="text-white">CONTACT US FOR EXPERT ADVICE:</h3>
                            <p class="text-lightGray">Get in touch to discuss how you can improve performance excellence for yourself or for your company</p>
                            <div class="space-small"></div>
                            <p class="text-lightGray"><i class="fa fa-phone" aria-hidden="true"> <a href="tel://1-503-477-6738">1 (503) 477-6738</a></i></p>
                            <p class="text-lightGray"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@nwcpe.com"> info@nwcpe.com</a></p>
                        </div>

                    </footer><!-- #colophon -->

                </div><!--col end -->

            </div><!-- row end -->
            
        </div><!-- container end -->
        
    </div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Loads slider script and settings if a widget on pos hero is published -->
<?php if ( is_active_sidebar( 'hero' ) ): ?>

<script>
    jQuery(document).ready(function() {
        var owl = jQuery('.owl-carousel');
        owl.owlCarousel({
            items:<?php echo get_theme_mod( 'understrap_theme_slider_count_setting', 1 );?>,
            loop:<?php echo get_theme_mod( 'understrap_theme_slider_loop_setting', true );?>,
            autoplay:true,
            autoplayTimeout:<?php echo get_theme_mod( 'understrap_theme_slider_time_setting', 5000 );?>,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: false,
            dots: true,
            autoplayHoverPause:true,
            margin:0,
            autoHeight:true
        });

        jQuery('.play').on('click',function(){
            owl.trigger('autoplay.play.owl',[1000])
        });
        jQuery('.stop').on('click',function(){
            owl.trigger('autoplay.stop.owl')
        });
    });
</script>
<?php endif; ?>

</body>

</html>
