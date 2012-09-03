<?php
/**
 * Elgg Theme for Cambiorural
 */

register_elgg_event_handler('init', 'system', 'cambiorural_theme_init');

function cambiorural_theme_init() {
	// Extend CSS
	elgg_extend_view('css', 'cambiorural_theme/css');

	// Replace Public Index page
	register_plugin_hook('index', 'system', 'cambiorural_theme_index_page');

	// See views for more
}

function cambiorural_theme_test() {}

function cambiorural_theme_index_page($hook, $value, $params) {

	if ($value === TRUE) {
		// Another plugin made it
		return $value;
	}

	if (elgg_is_logged_in()) { return FALSE; }

	global $CONFIG;

	$index_page = elgg_get_config('pluginspath') . "cambiorural_theme/pages/cambiorural_theme/index.php";

	if (include_once($index_page)) {
		return TRUE;
	}
	return FALSE;
}
