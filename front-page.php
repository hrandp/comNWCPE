<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
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

        <div class="wrapper-border hidden-xs hidden-sm">
            <div class="row">
                <?php $temp_query = $wp_query; ?>

                    <?php query_posts('showposts=1'); ?>

                        <?php while (have_posts()) : the_post(); ?>
                        <div class="col-md-3">
                            <?php the_post_thumbnail('front-page-post-thumbnail'); ?>
                        </div>
                        <div class="col-md-9 bg-darkGray">
                            <div class="post" id="post-<?php the_ID(); ?>">
                                <h3 class="text-white"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                <p class="text-white"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
            </div>
        </div>                
            </main><!-- #main -->
           
	    </div><!-- #primary -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>