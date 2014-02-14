<?php


	// image gallery
	
		if ( !isset( $content_width ))
			$content_width = 970;


	// options panel
	
		if ( !function_exists( 'optionsframework_init' ) ) {
			define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
			require_once dirname( __FILE__ ) . '/inc/options-framework.php';
		}
	

	// define user id
	
		if (is_user_logged_in()) {
			global $current_user;
			get_currentuserinfo();
			define('USERID', $current_user->ID);
		}

	// custom fields
			
		// move it to the menu bar
			
			if (USERID == '1') {
				function custom_field_menubar() {
				    global $wp_admin_bar;
				
				    $wp_admin_bar->add_menu( array(
				        'parent' => 'my-account-with-avatar',
				        'id' => 'custom_field_stuff',
				        'title' => __('Custom Fields'),
				        'href' => admin_url( 'edit.php?post_type=acf')
				    ) );
				    echo "<style>#toplevel_page_edit-post_type-acf {display:none!important;}</style>";
				}
				add_action( 'wp_before_admin_bar_render', 'custom_field_menubar' );
			}

	// gets

		get_template_part('includes/functions/advanced-custom-fields/acf');
		get_template_part('includes/functions/acf-repeater/acf-repeater');
		get_template_part('includes/functions/acf-gallery/acf-gallery');
		
	// admin

		add_filter( 'show_admin_bar', '__return_false' );

	// thumbs

		add_theme_support( 'post-thumbnails' );

	// menus

		if ( function_exists( 'register_nav_menus' ) ) {
			register_nav_menus(
				array(
				  'topmenu' => 'Main Menu',
				)
			);
		}

	// excerpt

		function custom_excerpt($count, $syntax) {
			$return = get_the_content($id);
			$return = preg_replace('`\[[^\]]*\]`','',$return);
			$return = strip_tags($return);
			$return = substr($return, 0, $count);
			$return = substr($return, 0, strripos($return, " "));
			$return = $return.$syntax;
			return $return;
		}

	// widgets

		register_sidebar(array(
			'name'=>'Sidebar',
			'before_widget' => '<div class="widget %s">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));