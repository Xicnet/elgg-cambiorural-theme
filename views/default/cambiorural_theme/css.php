<?php
/**
 * Cambio Rural Theme
 */

function azure($transparency = 1.00) {
	return "rgba(240, 255, 255, $transparency)";
}

?>
/**
 * Cambio Rural Theme
 */

body.cambiorural {
    background: azure url(/mod/cambiorural_theme/graphics/bg.jpg) 0px 0px fixed no-repeat;
	-moz-background-size: auto 100%;
	-webkit-background-size: auto 100%;
	background-size: cover;
}

body {
    background-color: #4690D6;
}

.elgg-ajax-loader {
    background-color: transparent;
}

.elgg-page-body .elgg-layout {
    background: <?php echo azure(0.85); ?>;
}

.elgg-layout-error {
    margin-top: 0;
}

.elgg-page-header {
    background: <?php echo azure(0.15); ?>;
}

.elgg-page-header h1 {
    text-align: right;
}

.elgg-search.elgg-search-header fieldset input.search-input {
    background-color: <?php azure(0.25); ?>;
	border-color: azure;
    color: rgba(0,0,0,0,25);
}

.elgg-menu-site > li:hover > a {
    text-shadow: none;
}
.elgg-menu-site > li.elgg-state-selected > a {
    background-color: <?php echo azure(0.85); ?>;
    text-shadow: none;
}

.elgg-menu-site-default > li > a {
    color: azure;
	text-shadow: 0px -1px 1px rgba(0,0,0,0.5);
}

.elgg-menu-site > li > ul {
    display: none;
    background-color: <?php echo azure(0.85); ?>;
}

.elgg-menu-site-default > li:hover > a {
    background-color: <?php echo azure(0.85); ?>;
    color: rgba(0,0,0,0.85);
}

.elgg-menu-filter-default > li {
border-size: 1px;
 }

.elgg-menu-filter > li,
	 .elgg-menu-filter > li:hover > a {
    background: none;
}
.elgg-menu-filter > li.elgg-state-selected,
.elgg-menu-filter > li.elgg-state-selected > a
 {
    background: #000;
}
.elgg-menu-filter > li:hover {
    background: #000;
 }
.elgg-menu-filter > li.elgg-state-selected:hover > a {
color: azure;
}

.elgg-menu-filter-default,
	 .elgg-menu-filter-default > li,
	 .elgg-menu-filter > .elgg-state-selected
{
	border-color: rgba(0, 0, 0, 1);
}

.elgg-menu-filter-default > li > a,
	 .elgg-menu-filter > .elgg-state-selected > a
{
    background-color: none;
}

/* stick to the page, and use that space inside */
.elgg-page-footer .elgg-menu-footer.elgg-menu-hz {
    background-color: <?php echo azure(0.85); ?>;
	margin-top: -5px;
	padding-top: 4px;
	padding-left: 3px;
}
.elgg-page-footer .elgg-menu-footer.elgg-menu-hz:first-child {
	-moz-border-bottom-left-radius: 8px;
	-o-border-bottom-left-radius: 8px;
	-webkit-border-bottom-left-radius: 8px;
	border-bottom-left-radius: 8px;
}
.elgg-page-footer .elgg-menu-footer.elgg-menu-hz:last-child {
	-moz-border-bottom-right-radius: 8px;
	-o-border-bottom-left-radius: 8px;
	-webkit-border-bottom-right-radius: 8px;
	border-bottom-right-radius: 8px;
}

.elgg-page-footer .elgg-menu-footer.elgg-menu-hz > li {
    line-height: 1em;
	vertical-align: top;
}

li.elgg-menu-item-report-this {
    padding-right: 1em;
	vertical-align: top;
}
li.elgg-menu-item-report-this > a {
	line-height: 16px;
	vertical-align: top;
}

.elgg-module-info > .elgg-head,
	.groups-profile > .elgg-image,
	.groups-profile .groups-stats,
    .groups-profile-fields .odd {
background: <?php echo azure(0.85); ?>;
 }

.groups-profile-fields .even {
background: <?php echo azure(0.45); ?>;
 }

.group-profile-fields code,
	.group-profile-fields pre {
background: transparent;
}

.elgg-menu-owner-block li a,
	.elgg-menu-page li a {
    background-color: <?php echo azure(0.5); ?>;
}
.elgg-menu-owner-block li:hover a,
	.elgg-menu-page li:hover a {
    background-color: <?php echo azure(1); ?>;
color: black;
	font-weight: bold;
}
