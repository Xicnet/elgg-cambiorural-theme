<?php
/**
 * Elgg Theme for Cambiorural
 */

elgg_register_event_handler('init', 'system', 'cambiorural_theme_init');

function cambiorural_theme_init() {
	// Extend CSS
	elgg_extend_view('css/elgg', 'cambiorural_theme/css');

    // Remove Elgg logo
	elgg_unregister_menu_item('topbar', 'elgg_logo');

	// See views for more
}

function cambiorural_theme_test() {}

