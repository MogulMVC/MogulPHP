<?php
if (!defined('SERVER_ROOT')) {
	header('Location: /error_404');
	exit ;
}
?>

<?php
if (!isset($bg)) {
	$bg = '';
}
?>

<div class="MHoverMessage">  
  <div class="MIconWarning150x150 left"/></div>
  <h3 id="warning_title" class="bold red"><?php echo $title; ?></h3>
  <p id="warning_description"><?php echo $description; ?></p>
</div>

<?php if($bg == 'white'):?>
  <div class="MModelBGWhite"></div>
<?php endif; ?>

<?php if($bg == 'black'):?>
  <div class="MModelBGBlack"></div>
<?php endif; ?>