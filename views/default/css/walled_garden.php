<?php
/**
 * Cambio Rural Theme
 */
?>
/**
 * Cambio Rural Theme
 */
body.cambiorural {
    background: azure url(/mod/cambiorural_theme/graphics/bg.jpg) 0px 0px fixed no-repeat;
	-moz-background-size: cover;
	-webkit-background-size: cover;
	background-size: cover;
}

body.cambiorural .elgg-page.elgg-page-default > .elgg-page-header {
    height: 48px;
    background-color: rgba(0, 0, 0, 0.05);
}
body.cambiorural .elgg-page.elgg-page-default:hover > .elgg-page-header {
    background-color: transparent;
    height: auto;
}
body.cambiorural .elgg-page.elgg-page-default:hover > .elgg-page-header > h1 {
    height: 80px;
    opacity: 0.9;
}

body.cambiorural .elgg-page.elgg-page-default .elgg-page-body .elgg-inner .elgg-layout.elgg-layout-one-column.clearfix {
    background: none;
}

body.cambiorural .elgg-page.elgg-page-default .elgg-page-body {
    padding-top: 62px;
}
body.cambiorural .elgg-page.elgg-page-default:hover .elgg-page-body {
    padding-top: 30px;
}

body.cambiorural .elgg-page.elgg-page-default > .elgg-page-header > h1 {
    line-height: 1em;
    color: azure;
    font-size: 75px;
    text-align: right;
    text-transform: uppercase;
    font-weight medium;
    padding-right: 10px;
    height: 48px;
    overflow-y: hidden;
    opacity: 0.2;
}

body.cambiorural .elgg-page-header {
    width: 100%;
    margin: 0 auto;
    background-color: transparent;
    background-color: rgba(240, 255, 255, 0.2);
}

body.cambiorural div.elgg-page-footer span.reference {
    text-transform: uppercase;
    color:white;
}

body.cambiorural div.elgg-page-footer {
    position: absolute;
    bottom: 10px;
    border: none;
    background-color: black;
    opacity: 0.5;
    line-height: 1.4em;
    font-size: smaller;
    text-align: right;
    box-shadow: -1px 0px 8px black;
    border-color: azure;
    width: 60%;
}
body.cambiorural div.elgg-page-footer span.reference {
    display: block;
    padding: 4px;
}

body.cambiorural div.elgg-main {
    margin: 0 auto;
    width: 20em;
}

body.cambiorural div.elgg-main h3 {
    color: olive;
}

body.cambiorural .elgg-foot label.mtm.float-alt ,
body.cambiorural a.forgot_link {
    color: azure;
    text-shadow: 0px 1px 3px black;
}
