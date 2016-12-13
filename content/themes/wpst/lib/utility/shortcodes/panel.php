<?php
// panel
// -------------------------------------------------------------
function wpst_shortcode_panel( $atts, $content = null ) {
    extract( shortcode_atts(
        array(
            'type' => '',
            'debug' => ''
        ), $atts )
    );
    if ($debug) {
        return '<pre><code class="html">[panel type="featured"]&lt;h3>This is a heading&lt;/h3>&lt;p>Lorem ipsum dolor sit amet, &lt;a href="#">consectetur&lt;/a> adipiscing elit.&lt;/p>[/panel]</code></pre>';
    }
    $css = "island--white";
    if($type):
        switch($type):
            case 'featured':
                $css = "island--featured";
                break;
            case 'grey':
                $css = "island--grey";
                break;
        endswitch;
    endif;
    $output_string = '<div class="u-push-top u-push-bottom | island ' . $css . '">' . $content . '</div>';
    return $output_string;
}
add_shortcode( 'panel', 'wpst_shortcode_panel' );
