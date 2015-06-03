<?php

class MD_WPET_settings extends WordPress_SimpleSettings {
	var $prefix = 'md_wpet_'; // this is super recommended
	function __construct() {
		parent::__construct(); // this is required
		// Actions
		add_action('admin_menu', array($this, 'menu') );
		register_activation_hook(__FILE__, array($this, 'activate') );
	}
	function menu () {
		add_options_page("Настройки плагина WP Email Templates", "WP Email Templates", 'manage_options', "md_wpet_options", array($this, 'admin_page') );
	}
	function admin_page () {
		include 'md_wpet_admin.php';
	}
	function activate() {
		$this->add_setting('template_header', '');
		$this->add_setting('template_footer', '');
		$this->add_setting('from_email', '');
	}
}
$MD_WPET_settings = new MD_WPET_settings();
