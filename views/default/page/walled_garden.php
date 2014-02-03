<?php
/**
 * Walled garden page shell
 *
 * Used for the walled garden index page
 */

// Set the content type
header("Content-type: text/html; charset=UTF-8");
?>
<?php
/**
 * Cambio Rural Theme public index page
 */

header("Content-type: text/html; charset=UTF-8");

?><!DOCTYPE html>
<html>
<head>
<?php echo elgg_view('page/elements/head', $vars); ?>
</head>
<body class="cambiorural">
<div class="elgg-page elgg-page-default">

  <div class="elgg-page-header">
    <h1><?php echo elgg_echo('cambiorural:title', 'es'); ?></h1>
  </div>

  <div class="elgg-page-body">
    <div class="elgg-inner">
      <div class="elgg-layout elgg-layout-one-column clearfix">
        <div class="elgg-body elgg-main">
	<?php echo elgg_view('core/account/login_box'); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="elgg-page-footer">
	 <p><span class="reference">Programa Cambio Rural — En desarollo</span></p>
  </div>

</div>
</body>
</html>
