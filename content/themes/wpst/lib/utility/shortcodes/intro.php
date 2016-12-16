<?php
// panel
// -------------------------------------------------------------
function wpst_shortcode_intro( $atts, $content = null ) {

    $output_string = '<div class="intro">' . $content . '</div>';
    return $output_string;
}
add_shortcode( 'intro', 'wpst_shortcode_intro' );
