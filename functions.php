<?php
function my_scripts_method() {

	$style_ver = filemtime(get_stylesheet_directory() . '/public/css/style.css');
	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/resources/slick/slick.min.css' );
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/resources/bootstrap/bootstrap.min.css' );
    wp_enqueue_style('bikash-style', get_stylesheet_directory_uri() . '/public/css/style.css', '', $style_ver);
	wp_enqueue_style( 'featherlight', get_stylesheet_directory_uri() . '/resources/featherlight/featherlight.min.css', '', 1);
    

	wp_dequeue_script('jquery');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), '20151215', false);    
    
	wp_enqueue_script('bikash-lodash', 'https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js', array(), '20151215', false);
	wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), '20151215', false);
    wp_enqueue_script('bikash-vue', 'https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.min.js', array(), '20151215', false);
    wp_enqueue_script('bikash-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
    wp_enqueue_script('bikash-axios', 'https://unpkg.com/axios/dist/axios.min.js', array(), '20151215', true);        
    wp_enqueue_script('bikash-bootstrap-js', get_template_directory_uri() . '/resources/bootstrap/bootstrap.min.js', ['jquery'], '20151215', true);
	
	
	wp_enqueue_script( 'bikash-components', get_template_directory_uri() . '/public/js/app.js', ['jquery'], filemtime( get_theme_file_path( "/public/js/app.js" )), true);
	wp_enqueue_script( 'bikash-custom', get_template_directory_uri() . '/public/js/custom.js', ['jquery'], filemtime( get_theme_file_path( "/public/js/custom.js" )), true);
    wp_enqueue_script('bikash-slick-js', get_template_directory_uri() . '/resources/slick/slick.min.js', ['jquery'], '20151215', true);
	wp_enqueue_script('bikash-featherlight-js', get_template_directory_uri() . '/resources/featherlight/featherlight.min.js', ['jquery'], '20151215', true);

  


	
}
//enqueue all the scripts from above
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

//image size
add_image_size('bikash-normal', 600, 600, ['left', 'top']);

add_filter( 'tiny_mce_before_init', function( $settings ){

    $settings['block_formats'] = 'Paragraph=p;Heading=h2;Subheading=h3';

    return $settings;

} );
function startsWith($haystack, $needle) {
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
}

// option page setting
function custom_option_acf_page(){
	if( function_exists("acf_add_options_page")) {		
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Footer',
			'menu_title'	=> 'Footer',
			'menu_slug' 	=> 'footer-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> true,
			'icon_url'      => 'dashicons-admin-tools',			
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Header',
			'menu_title'	=> 'Header',
			'menu_slug' 	=> 'header-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> true,
			'icon_url'      => 'dashicons-admin-tools',			
		));

		
		
	}
}
add_action( 'acf/init','custom_option_acf_page' );


//Theme options
add_theme_support( 'menus');

//menus
register_nav_menus(
	array(
		'top-menu'=>'Top Nav menu',
		'footer-menu-right'=>'Footer Menu Right',
		'footer-menu-middle'=>'Footer Menu Middle',
		'footer-menu-left'=>'Footer Menu Left'
	)
);


// GLOBAL variable for theme variants light or dark mainly used now for nav bar
$GLOBALS['THEME_VARIANTS'] = array();
