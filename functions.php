<?php
add_action( 'after_setup_theme', 'blm_theme_setup' );
function blm_theme_setup() {
	
	global $content_width;
	/* Set the $content_width for things such as video embeds. */
	if ( !isset( $content_width ) )
		$content_width = 600;

	/* Add theme support for automatic feed links. */
	add_theme_support( 'automatic-feed-links' );
	
	/* Add theme support for post thumbnails (featured images). */
	add_theme_support( 'post-thumbnails');
	
	/* Add your nav menus function to the 'init' action hook. */
	add_action( 'init', 'blm_register_menus' );

	/* Add custom actions. */
	add_action( 'widgets_init', 'blm_register_sidebars' );
}

// Add menu features
function blm_register_menus() {
	register_nav_menus(array('primary'=>__('Primary Menu'),));
}

// Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
function blm_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'blm_page_menu_args' );

function blm_register_sidebars() {
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'description' => __( 'The following widgets will appear in the main sidebar div.' ),
			'before_widget' => '<article id="%1$s" class="widget %2$s">',
			'after_widget' => '</article>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
}

function blm_load_scripts() {
	/* Enqueue custom Javascript here using wp_enqueue_script(). */
	if ( !is_admin() ) {
		  wp_deregister_script('jquery');
		  wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
		  wp_enqueue_script('jquery');
	}

	/* Load the comment reply JavaScript. */
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() )
		wp_enqueue_script( 'comment-reply' );
}

// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);	

?>