<?php
/**
 * Template Name: Template Full Width
 *
 * @package Longevity
 * 
 *
 */

get_header(); ?>

<div class="container">

<?php get_sidebar( 'cta' ); ?>

<?php get_sidebar( 'breadcrumbs' ); ?>

<?php get_sidebar( 'top' ); ?>

  <div class="row">	
      
      <div class="col-lg-12">
    
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();
            
                        // Include the page content template.
                        get_template_part( 'template-parts/content', 'page' );
            
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
            
                    // End the loop.
                    endwhile;
                    ?>
                
            </main>
        </div>

	  </div>
       
	</div>
    
    <?php get_sidebar( 'content-bottom' ); ?>
        
</div>
    
<?php get_footer(); ?>    