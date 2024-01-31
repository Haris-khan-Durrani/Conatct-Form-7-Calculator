<?php

/* frontend style and script */
function generate_random_code($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';
    
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $code;
}

// Example usage

add_action( 'wp_enqueue_scripts', 'CALCULATIONCF7_load_front_script_style');
function CALCULATIONCF7_load_front_script_style() {
    $random_code = generate_random_code(12);
    wp_enqueue_style( 'CALCULATIONCF7-front-css', CALCULATIONCF7_PLUGIN_DIR . '/assets/css/front.css', false, '2.0.0' );
    wp_enqueue_script( 'CALCULATIONCF7-front-js', CALCULATIONCF7_PLUGIN_DIR . '/assets/js/front.js?qw='.$random_code, array('jquery'), '2.0.0', true );
}
