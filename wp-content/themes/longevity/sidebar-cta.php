<?php
/**
 * Call to Action Sidebar 
 *
 * @package Longevity
 * 
 */


if ( ! is_active_sidebar( 'cta' ) ) {
	return;
}
?>
<div id="cta-sidebar">            
    <aside class="widget-area">		             
        <?php dynamic_sidebar( 'cta' ); ?> 	
    </aside>
</div>
