<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 *
 * @package understrap
 */

get_header(); ?>
<?php 
if ( function_exists( 'soliloquy' ) ) { soliloquy( '1533' ); } 
if ( function_exists( 'soliloquy' ) ) { soliloquy( '1533', 'slug' ); }
?>
<div class="wrapper" id="page-wrapper">
    
    <div  id="content" class="container-fluid">
        
	   <div id="primary" class="col-md-12 content-area">

            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :

                            comments_template();
                        
                        endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

        <div class="wrapper-border">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-darkGray">What We Think</h2>
                </div>
                
                <!-- bar --> 
                <div class="col-xs-12">
                    <div class="space"><div class="line-gray"></div></div>
                </div>
                <!-- /.bar --> 

                <div class="col-md-12 text-center">
                 
                    <p class="text-darkGray">Optimization of your organization’s processes will optimize customer loyalty and profitability. We are agents of your growth and success in achieving dominance in your markets.</p>
                    <p class="text-darkGray">Trained and certified by the creators of both Six Sigma and Lean, we have witnessed firsthand what they were thinking as they created both programs. With over 35 years of experience in training, consulting, and practicing Lean and Six Sigma as both teachers and workers, we are committed to supporting our clients in substantive and practical ways. We’re concerned first and foremost about your success.</p>
                </div>

               </div><!-- /.row -->
                
                <div class="space"></div>

                


                <?php $temp_query = $wp_query; ?>

                    <?php query_posts('showposts=3'); ?>

                        <?php while (have_posts()) : the_post(); ?>
                        
                        <div class="row">

                            <div class="col-md-3 bg-darkGray no-padding blog-snippet-container">
                                <span class="img-thumbnail-custom"><?php the_post_thumbnail('front-page-post-thumbnail'); ?></span>
                            </div>
                            
                            <div class="col-md-9 padding-text-blog-snippet blog-excerpt-bg-height blog-snippet-info">
                                <div class="post" id="post-<?php the_ID(); ?>">
                                    <h4 class="text-white text-serif"><a class="text-white permalink-custom" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                    <span class="text-lightGray text-garamound"><?php the_time(get_option('date_format')) ?></span>
                                    
                                    <div class="space-small"></div>

                                    <span class="text-white"><?php the_excerpt(2); ?></span>
                                </div>
                            </div>
                            
                        </div><!-- /.row -->
                        <div class="space-lg-top"><div class="line-gray-full-width"></div></div>

                    <?php endwhile; ?>
                    
                    <div class="row text-center">
                        <h3 class="text-darkGray">Learn more about Lean and Six Sigma from these insights and publications</h3>
                        <div class="space"></div>
                        <a href="<?php bloginfo('url'); ?>/blog" class="btn-custom-blue-lg"><div class="btn-custom-border-gray-lg">Insights &amp; Publications<i class="fa fa-chevron-down" aria-hidden="true"></i></div></a> 
                    </div>

        </div><!-- /.wrapper-border -->                
            </main><!-- #main -->
           
	    </div><!-- #primary -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>