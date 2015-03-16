<?php

	// Get screen options
	$lsScreenOptions = get_option('ls-screen-options', '0');
	$lsScreenOptions = ($lsScreenOptions == 0) ? array() : $lsScreenOptions;
	$lsScreenOptions = is_array($lsScreenOptions) ? $lsScreenOptions : unserialize($lsScreenOptions);

	// Defaults
	if(!isset($lsScreenOptions['showTooltips'])) { $lsScreenOptions['showTooltips'] = 'true'; }
	if(!isset($lsScreenOptions['showRemovedSliders'])) { $lsScreenOptions['showRemovedSliders'] = 'false'; }
	if(!isset($lsScreenOptions['numberOfSliders'])) { $lsScreenOptions['numberOfSliders'] = '10'; }

	// Get current page
	$curPage = (!empty($_GET['paged']) && is_numeric($_GET['paged'])) ? (int) $_GET['paged'] : 1;
	// $curPage = ($curPage >= $maxPage) ? $maxPage : $curPage;

	// Set filters
	$filters = array('page' => $curPage, 'limit' => (int) $lsScreenOptions['numberOfSliders']);
	if($lsScreenOptions['showRemovedSliders'] == 'true') {
		$filters['exclude'] = array('hidden'); }

	// Find sliders
	$sliders = LS_Sliders::find($filters);

	// Pager
	$maxItem = LS_Sliders::$count;
	$maxPage = ceil($maxItem / (int) $lsScreenOptions['numberOfSliders']);
	$maxPage = $maxPage ? $maxPage : 1;

	// Custom capability
	$custom_capability = $custom_role = get_option('layerslider_custom_capability', 'manage_options');
	$default_capabilities = array('manage_network', 'manage_options', 'publish_pages', 'publish_posts', 'edit_posts');

	if(in_array($custom_capability, $default_capabilities)) {
		$custom_capability = '';
	} else {
		$custom_role = 'custom';
	}

	// Auto-updates
	$code = get_option('layerslider-purchase-code', '');
	$validity = get_option('layerslider-validated', '0');
	$channel = get_option('layerslider-release-channel', 'stable');

	// Google Fonts
	$googleFonts = get_option('ls-google-fonts', array());

	// Box toggles
	$lsBoxToggles = get_option('ls-collapsed-boxes', array());
	$lsAdvSettingsToggle = isset($lsBoxToggles['ls-advanced-settings-toggle']) ? $lsBoxToggles['ls-advanced-settings-toggle'] : true;
	$lsGoogleFontsToggle = isset($lsBoxToggles['ls-google-fonts-toggle']) ? $lsBoxToggles['ls-google-fonts-toggle'] : true;

	// Notification messages
	$notifications = array(
		'removeSelectError' => __('No sliders were selected to remove.', 'LayerSlider'),
		'removeSuccess' => __('The selected sliders were removed.', 'LayerSlider'),
		'deleteSelectError' => __('No sliders were selected.', 'LayerSlider'),
		'deleteSuccess' => __('The selected sliders were deleted permanently.', 'LayerSlider'),
		'mergeSelectError' => __('You need to select at least 2 sliders to merge them.', 'LayerSlider'),
		'mergeSuccess' => __('The selected items were merged together as a new slider.', 'LayerSlider'),
		'restoreSelectError' => __('No sliders were selected.', 'LayerSlider'),
		'restoreSuccess' => __('The selected sliders were restored.', 'LayerSlider'),

		'exportSelectError' => __('No sliders were selected to export.', 'LayerSlider'),
		'exportZipError' => __('The PHP ZipArchive extension is required to import ZIPs.', 'LayerSlider'),

		'importSelectError' => __('Choose a file to import sliders.', 'LayerSlider'),
		'importFailed' => __('The import file seems to be invalid or corrupted.', 'LayerSlider'),
		'importSuccess' => __('Your slider has been imported.', 'LayerSlider'),
		'permissionError' => __('Your account does not have the necessary permission you chose, and your settings have not been saved to prevent locking yourself out of the plugin.', 'LayerSlider'),
		'permissionSuccess' => __('Permission changes has been updated.', 'LayerSlider'),
		'googleFontsUpdated' => __('Your Google Fonts library has been updated.', 'LayerSlider'),
		'generalUpdated' => __('Your settings has been updated.', 'LayerSlider')
	);
?>
<div id="ls-screen-options" class="metabox-prefs hidden">
	<div id="screen-options-wrap" class="hidden">
		<form id="ls-screen-options-form" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
			<h5><?php _e('Show on screen', 'LayerSlider') ?></h5>
			<label><input type="checkbox" name="showTooltips"<?php echo $lsScreenOptions['showTooltips'] == 'true' ? ' checked="checked"' : ''?>> <?php _e('Tooltips', 'LayerSlider') ?></label>
			<label><input type="checkbox" name="showRemovedSliders" class="reload"<?php echo $lsScreenOptions['showRemovedSliders'] == 'true' ? ' checked="checked"' : ''?>> <?php _e('Removed sliders', 'LayerSlider') ?></label><br>

			<input type="number" name="numberOfSliders" min="3" step="1" value="<?php echo $lsScreenOptions['numberOfSliders'] ?>"> <?php _e('Sliders', 'LayerSlider') ?>
			<button class="button"><?php _e('Apply', 'LayerSlider') ?></button>
		</form>
	</div>
	<div id="screen-options-link-wrap" class="hide-if-no-js screen-meta-toggle">
		<a href="#screen-options-wrap" id="show-settings-link" class="show-settings"><?php _e('Screen Options', 'LayerSlider') ?></a>
	</div>
</div>
<div class="wrap" id="ls-list-page">
	<h2>
		<?php _e('LayerSlider sliders', 'LayerSlider') ?>
		<a href="#" id="ls-add-slider-button" class="add-new-h2"><?php _e('Add New', 'LayerSlider') ?></a>
		<a href="<?php echo wp_nonce_url('?page=layerslider&action=import_sample', 'import-sample-sliders') ?>" id="ls-import-samples-button" class="add-new-h2"><?php _e('Import sample sliders', 'LayerSlider') ?></a>
	</h2>

	<!-- Error messages -->
	<?php if(isset($_GET['message'])) : ?>
	<div class="ls-notification <?php echo isset($_GET['error']) ? 'warning' : 'changed' ?>">
		<div><?php echo $notifications[ $_GET['message'] ] ?></div>
	</div>
	<?php endif; ?>
	<!-- End of error messages -->

	<!-- Version number -->
	<?php if(strpos(LS_PLUGIN_VERSION, 'b') !== false) : ?>
	<div class="ls-version-number">
		<?php _e('Using beta version', 'LayerSlider') ?> (<?php echo LS_PLUGIN_VERSION ?>)
		<a href="mailto:support@kreaturamedia.com?subject=LayerSlider WP Beta Feedback"><?php _e('Send feedback', 'LayerSlider') ?></a>
	</div>
	<?php endif; ?>
	<!-- End of version number -->

	<!-- Add slider template -->
	<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" id="ls-add-slider-template" class="ls-pointer ls-box">
		<?php wp_nonce_field('add-slider'); ?>
		<input type="hidden" name="ls-add-new-slider" value="1">
		<span class="ls-mce-arrow"></span>
		<h3 class="header"><?php _e('Give a name for your new slider', 'LayerSlider') ?></h3>
		<div class="inner">
			<input type="text" name="title" placeholder="<?php _e('e.g. Homepage slider', 'LayerSlider') ?>">
			<button class="button"><?php _e('Add slider', 'LayerSlider') ?></button>
		</div>
	</form>
	<!-- End of Add slider template -->


	<!-- Import sample sliders template -->
	<div id="ls-import-samples-template" class="ls-pointer ls-box">
		<span class="ls-mce-arrow"></span>
		<h3 class="header"><?php _e('Choose a demo slider to import', 'LayerSlider') ?></h3>
		<ul class="inner">
			<li>
				<a href="<?php echo wp_nonce_url('?page=layerslider&action=import_sample&slider=v5.zip', 'import-sample-sliders') ?>">
					<div class="preview"><img src="<?php echo LS_ROOT_URL.'/demos/v5.jpg' ?>"></div>
					<