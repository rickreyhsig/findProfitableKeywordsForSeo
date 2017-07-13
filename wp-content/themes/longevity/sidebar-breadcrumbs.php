<?php
/**
 * Breadcrumbs Sidebar 
 *
 * @package Longevity
 * 
 */


if ( ! is_active_sidebar( 'breadcrumbs' ) ) {
	return;
}
?>

      <div class="row">
      
        <div id="breadcrumbs-sidebar" class="col-lg-12">            
            <aside class="widget-area">		             
                <?php dynamic_sidebar( 'breadcrumbs' ); ?> 	
            </aside>
        </div>

</div>
