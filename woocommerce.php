<?php
/**
 * Template Name 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header(); ?>
<div class="child-page-header-container" id="wrapper-header">
</div>
<div class="wrapper" id="woocommerce-wrapper">
    
    <div class="container-fluid">
        
	   <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
	   
            <main id="main" class="site-main" role="main">

                <!-- The WooCommerce loop -->
                <?php woocommerce_content(); ?>

            </main><!-- #main -->
           
	    </div><!-- #primary -->
              
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
