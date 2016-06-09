<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'kage'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// If using image radio buttons, define a directory path
	$set_year = date('Y');
	$options = array();

	/* General Settings */	
	
	$options[] = array(
		'name' => __('General Settings', 'kage'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Header Logo Text', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'header_logo_text1',
		'std' => '',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Header Logo Text 2', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'header_logo_text2',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Header Logo Image', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'logo_image',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Header Phone', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'header_phone',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Header Email', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'header_email',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Footer copyright text left', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'footer_text_left',
		'std' => __('Copyright &copy; ', 'kage').$set_year.' '.get_bloginfo('name'),
		'type' => 'text');	

	$options[] = array(
		'name' => __('Home Page', 'kage'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Top Image', 'kage'),
		'desc' => __('Recommended image sizes 1000 X 320', 'kage'),
		'id' => 'top_image',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Top Title', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_title',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Top Box 1 Icon', 'kage'),
		'desc' => __('Recommended image sizes 140 X 140', 'kage'),
		'id' => 'top_box_1_icon',
		'type' => 'upload');		
		
	$options[] = array(
		'name' => __('Top Box 1 Title', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_1_title',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Top Box 1 Link', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_1_link',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Top Box 1 Content', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_1_content',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Top Box 2 Icon', 'kage'),
		'desc' => __('Recommended image sizes 140 X 140', 'kage'),
		'id' => 'top_box_2_icon',
		'type' => 'upload');			
		
	$options[] = array(
		'name' => __('Top Box 2 Title', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_2_title',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Top Box 2 Link', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_2_link',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Top Box 2 Content', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_2_content',
		'type' => 'textarea');	

	$options[] = array(
		'name' => __('Top Box 3 Icon', 'kage'),
		'desc' => __('Recommended image sizes 140 X 140', 'kage'),
		'id' => 'top_box_3_icon',
		'type' => 'upload');				
		
	$options[] = array(
		'name' => __('Top Box 3 Title', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_3_title',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Top Box 3 Link', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_3_link',
		'type' => 'text');		
		
	$options[] = array(
		'name' => __('Top Box 3 Content', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_3_content',
		'type' => 'textarea');		

	$options[] = array(
		'name' => __('Top Box 4 Icon', 'kage'),
		'desc' => __('Recommended image sizes 140 X 140', 'kage'),
		'id' => 'top_box_4_icon',
		'type' => 'upload');				
		
	$options[] = array(
		'name' => __('Top Box 4 Title', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_4_title',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Top Box 4 Link', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_4_link',
		'type' => 'text');		
		
	$options[] = array(
		'name' => __('Top Box 4 Content', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'top_box_4_content',
		'type' => 'textarea');			
		
	$options[] = array(
		'name' => __('Blue Title', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'blue_title',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Blue Content', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'blue_content',
		'std' => '',
		'type' => 'textarea');	
		
	$options[] = array(
		'name' => __('Blue Button Text', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'blue_button_text',
		'std' => 'Click Here',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Blue Button Link', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'blue_button_link',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Welcome Image', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'welcome_image',
		'type' => 'upload');	
		
	$options[] = array(
		'name' => __('Welcome Title', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'welcome_title',
		'std' => '',
		'type' => 'text');			

	$options[] = array(
		'name' => __('Welcome Title 2', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'welcome_title2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Welcome Content', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'welcome_content',
		'std' => '',
		'type' => 'textarea');			

	$options[] = array(
		'name' => __('Welcome Button Text', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'welcome_button_text',
		'std' => 'Read More',
		'type' => 'text');	

	$options[] = array(
		'name' => __('Welcome Button Link', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'welcome_button_link',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Title Area 2', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'title_area_2',
		'std' => 'Portfolio',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Box 1 Image', 'kage'),
		'desc' => __('Recommended image sizes 303 X 344', 'kage'),
		'id' => 'box_1_image',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Box 1  Text', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'box_1_text',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Box 1  Link', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'box_1_link',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Box 2 Image', 'kage'),
		'desc' => __('Recommended image sizes 303 X 344', 'kage'),
		'id' => 'box_2_image',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Box 2  Text', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'box_2_text',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Box 2  Link', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'box_2_link',
		'type' => 'text');		
		
	$options[] = array(
		'name' => __('Box 3 Image', 'kage'),
		'desc' => __('Recommended image sizes 303 X 344', 'kage'),
		'id' => 'box_3_image',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Box 3  Text', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'box_3_text',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Box 4  Link', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'box_4_link',
		'type' => 'text');		

	$options[] = array(
		'name' => __('Testimonial Box Text', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'testimonial_box_text',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Testimonial Box Name', 'kage'),
		'desc' => __('', 'kage'),
		'id' => 'testimonial_box_name',
		'type' => 'text');
		
	return $options;
}