<?php
if ( !function_exists( 'add_action' ) ) {
    echo "This page cannot be called directly.";
    exit;
}

global $MD_WPET_settings;

class MD_WPET_Email_Generator {

    const PREFIX = 'md_wpet_'; // self::PREFIX

    private $variables = [];
    private $generator = '';
    public $generated ='';
    private $headers = '';
    private $html = '';

    public function __construct($id) {
        $this->generator = new Mustache_Engine;

        $this->html = $MD_WPET_settings->get_setting('template_header');
        $this->html .= get_post_meta($id, 'md_wpet_template', true);
        $this->html .= $MD_WPET_settings->get_setting('template_footer');

        $this->headers = 'From: '.get_bloginfo( 'name' ).' <'.get_option( 'admin_email' ).'>' . "\r\n";
        add_filter( 'wp_mail_content_type', function( $content_type ) {
            return 'text/html';
        });
    }

    public function set_vars(array $vars) {
        $this->variables[] = $vars;
    }

    public function generate_html() {
        $this->generated = $this->generator->render($this->html, $this->variables);
    }

    public function send($to, $subject) {
        wp_mail( $to, $subject, $this->generated, $this->headers );
    }
}
