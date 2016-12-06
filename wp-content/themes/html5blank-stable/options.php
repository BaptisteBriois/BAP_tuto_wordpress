<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */
function optionsframework_option_name() {
	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
	// echo $themename;
}
/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */
function optionsframework_options() {
	// Test data

	$options[] = array(
		'name' => __('Phrase description', 'options_check'),
		'desc' => __('Détaille la description'),
		'id' => 'description',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Image', 'options_check'),
		'desc' => __('Image sous la description', 'options_check'),
		'id' => 'image',
		'type' => 'upload');
	
	$options[] = array(
		'name' => __('Couleur de la font', 'options_check'),
		'desc' => __('Choisissez une couleur !', 'options_check'),
		'id' => 'couleur',
		'std' => '',
		'type' => 'color' );

	return $options;
}