<?php
if ( !function_exists( 'add_action' ) ) {
    echo "This page cannot be called directly.";
    exit;
}

function md_wpet_email_preview($content) {
global $post;
    if ($post->post_type == 'md_etemplate') {
        $content = 'Test text here';
    }
    return $content;
}
//add_filter('the_content', 'md_wpet_email_preview');
