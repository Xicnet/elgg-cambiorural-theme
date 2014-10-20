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

    // Page Handler
    elgg_register_page_handler('cambiorural_theme', 'cambiorural_theme_page_handler');

   	// Ensure favicon is a public page
	elgg_register_plugin_hook_handler('public_pages', 'walled_garden', 'cambiorural_theme_public_pages');

    // Force locale globally
    setlocale(LC_ALL, 'es_AR.UTF-8');

    // See views for more
}

function cambiorural_theme_test() {}

function cambiorural_theme_page_handler($page) {

	switch ($page[0]) {
	case 'favicon':
		if (cambiorural_theme_handle_favicon()) {
			return TRUE;
		};
		break;
	default:
		return FALSE;
	}

}

function cambiorural_theme_handle_favicon() {
	$favicon = elgg_get_plugins_path() . 'cambiorural_theme/graphics/favicon.ico';
	if (is_readable($favicon)) {
		header('Content-Type: image/x-icon');
		header('Content-Length: ' . filesize($favicon));
		readfile($favicon);
		return TRUE;
	}
}


function cambiorural_theme_public_pages($hook, $type, $returnvalue, $params) {

	if (!is_array($returnvalue)) {
		$returnvalue = array($returnvalue);
	}
	$returnvalue[] = 'cambiorural_theme/favicon';

	return $returnvalue;

}


function azure($transparency = "1.00") {
        return "rgba(240, 255, 255, $transparency)";
}

