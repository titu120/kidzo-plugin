        </div><!-- .content -->
    </div><!-- .main-container -->
<?php
/**
 * @since 1.0.0
 */
global $heartly_option;
if( is_404() ){
    return;
} else {
    do_action( 'hfe_footer_before' );
    do_action( 'hfe_footer' );
} ?>
</div><!-- #page -->
<?php 
if(!empty($heartly_option['show_top_bottom'])){
?>
 <!-- start top-to-bottom  -->
<div id="top-to-bottom">
    <i class="fa-solid fa-arrow-up n4-color fs-five"></i>
</div>   
<?php } ?>
 <?php wp_footer(); ?>
</body>
</html> 
