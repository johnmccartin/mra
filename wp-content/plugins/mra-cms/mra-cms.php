<?php
/*
Plugin Name: Mahan Rykiel CMS
Plugin URI: http://www.alleyhousestudio.com
Description: Custom content management for Mahan Rykiel Associates
Version: 1.0
Author: Alleyhouse Studio
Author URI: http://www.alleyhousestudio.com
License: GPLv2
*/

function my_post_types() {

	$proj_labels = array(
		'name' 				=> 'Projects',
		'singular_name'		=> 'Project',
		'add_new_item'		=> 'Add New Project',
		'edit_item'			=> 'Edit Project',
		'new_item'			=> 'New Project',
		'view_item'			=> 'View Project',
		'search_items'		=> 'Search Projects',
		'not_found'			=> 'No Project Found',
		'not_found_in_trash'=> 'No Project Found in Trash',
		'parent_item_colon'	=> ''
	);
	$proj_args = array(
		'labels'             => $proj_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => 'projects',
		'rewrite'            => array( 'slug' => 'projects' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title','editor','revisions' ),
		'taxonomies'		 => array( )
	);
	register_post_type( 'projects', $proj_args );
	
	
	$ppl_labels = array(
		'name' 				=> 'People',
		'singular_name'		=> 'Person',
		'add_new_item'		=> 'Add New Person',
		'edit_item'			=> 'Edit Person',
		'new_item'			=> 'New Person',
		'view_item'			=> 'View Person',
		'search_items'		=> 'Search People',
		'not_found'			=> 'No Person Found',
		'not_found_in_trash'=> 'No Person Found in Trash',
		'parent_item_colon'	=> ''
	);
	$ppl_args = array(
		'labels'             => $ppl_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => 'people',
		'rewrite'            => array( 'slug' => 'people' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title','editor','revisions','page-attributes' ),
		'taxonomies'		 => array()
	);
	register_post_type( 'people', $ppl_args );
	
	
	$career_labels = array(
		'name' 				=> 'Careers',
		'singular_name'		=> 'Career',
		'add_new_item'		=> 'Add New Career',
		'edit_item'			=> 'Edit Career',
		'new_item'			=> 'New Career',
		'view_item'			=> 'View Career',
		'search_items'		=> 'Search Careers',
		'not_found'			=> 'No Careers Found',
		'not_found_in_trash'=> 'No Careers Found in Trash',
		'parent_item_colon'	=> ''
	);
	$career_args = array(
		'labels'             => $career_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => 'Careers',
		'rewrite'            => array( 'slug' => 'careers' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title','editor','revisions' ),
		'taxonomies'		 => array()
	);
	register_post_type( 'careers', $career_args );
	
	
	$intern_labels = array(
		'name' 				=> 'Internships',
		'singular_name'		=> 'Internship',
		'add_new_item'		=> 'Add New Internship',
		'edit_item'			=> 'Edit Internship',
		'new_item'			=> 'New Internship',
		'view_item'			=> 'View Internship',
		'search_items'		=> 'Search Internships',
		'not_found'			=> 'No Internships Found',
		'not_found_in_trash'=> 'No Internships Found in Trash',
		'parent_item_colon'	=> ''
	);
	$intern_args = array(
		'labels'             => $intern_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => 'interns',
		'rewrite'            => array( 'slug' => 'internships' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title','editor','revisions' ),
		'taxonomies'		 => array()
	);
	register_post_type( 'internships', $intern_args );
	
	
	$news_labels = array(
		'name' 				=> 'News',
		'singular_name'		=> 'News Item',
		'add_new_item'		=> 'Add New News Item',
		'edit_item'			=> 'Edit News Item',
		'new_item'			=> 'New News Item',
		'view_item'			=> 'View News Item',
		'search_items'		=> 'Search News',
		'not_found'			=> 'No News Item Found',
		'not_found_in_trash'=> 'No News Item Found in Trash',
		'parent_item_colon'	=> ''
	);
	$news_args = array(
		'labels'             => $news_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => 'news',
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title','editor','revisions' ),
		'taxonomies'		 => array( )
	);
	register_post_type( 'news', $news_args );
	
	$explore_labels = array(
		'name' 				=> 'Explorations',
		'singular_name'		=> 'Exploration',
		'add_new_item'		=> 'Add New Exploration',
		'edit_item'			=> 'Edit Exploration',
		'new_item'			=> 'New Exploration',
		'view_item'			=> 'View Exploration',
		'search_items'		=> 'Search Explorations',
		'not_found'			=> 'No Explorations Found',
		'not_found_in_trash'=> 'No Explorations Found in Trash',
		'parent_item_colon'	=> ''
	);
	$explore_args = array(
		'labels'             => $explore_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => 'news',
		'rewrite'            => array( 'slug' => 'explorations' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title','editor','revisions','page-attributes' ),
		'taxonomies'		 => array( )
	);
	register_post_type( 'explorations', $explore_args );


}
add_action( 'init', 'my_post_types' );
	
	
function my_taxonomies() {
	
	$type_labels = array(
		'name'                       => 'Project Categories',
		'singular_name'              => 'Project Category',
		'menu_name'                  => 'Category',
		'all_items'                  => 'All Categories',
		'parent_item'                => 'Parent Category',
		'parent_item_colon'          => 'Parent Category:',
		'new_item_name'              => 'New Category Name',
		'add_new_item'               => 'Add New Category',
		'edit_item'                  => 'Edit Category',
		'update_item'                => 'Update Category',
		'separate_items_with_commas' => 'Separate categories with commas',
		'search_items'               => 'Search Categories',
		'add_or_remove_items'        => 'Add or remove categories',
		'choose_from_most_used'      => 'Choose from the most used categories',
		'not_found'                  => 'Not Found',
	);
	$type_args = array(
		'labels'                     => $type_labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => false,
		'query_var'					=> 'type'
	);
	register_taxonomy( 'proj_type', array( 'projects' ), $type_args );	
	
	$ptag_labels = array(
		'name'                       => 'Project Tags',
		'singular_name'              => 'Project Tag',
		'menu_name'                  => 'Tag',
		'all_items'                  => 'All Tag',
		'parent_item'                => 'Parent Tag',
		'parent_item_colon'          => 'Parent Tag:',
		'new_item_name'              => 'New Tag Name',
		'add_new_item'               => 'Add New Tag',
		'edit_item'                  => 'Edit Tag',
		'update_item'                => 'Update Tag',
		'separate_items_with_commas' => 'Separate tags with commas',
		'search_items'               => 'Search Tags',
		'add_or_remove_items'        => 'Add or remove tags',
		'choose_from_most_used'      => 'Choose from the most used tag',
		'not_found'                  => 'Not Found',
	);
	$ptag_args = array(
		'labels'                     => $ptag_labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => false,
		'query_var'					=> 'ptag'
	);
	register_taxonomy( 'proj_tags', array( 'projects' ), $ptag_args );	
	
	
	
	$roller_labels = array(
		'name'                       => 'Roles',
		'singular_name'              => 'Role',
		'menu_name'                  => 'Role',
		'all_items'                  => 'All Roles',
		'parent_item'                => 'Parent Role',
		'parent_item_colon'          => 'Parent Role:',
		'new_item_name'              => 'New Role Name',
		'add_new_item'               => 'Add New Role',
		'edit_item'                  => 'Edit Role',
		'update_item'                => 'Update Role',
		'separate_items_with_commas' => 'Separate roles with commas',
		'search_items'               => 'Search Roles',
		'add_or_remove_items'        => 'Add or remove roles',
		'choose_from_most_used'      => 'Choose from the most used roles',
		'not_found'                  => 'Not Found',
	);
	$roller_args = array(
		'labels'                     => $roller_labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => false,
		'query_var'					=> 'role'
	);
	register_taxonomy( 'staff_roles', array( 'people' ), $roller_args );	
	
	$exptag_labels = array(
		'name'                       => 'Exploration Tags',
		'singular_name'              => 'Exploration Tag',
		'menu_name'                  => 'Tag',
		'all_items'                  => 'All Tag',
		'parent_item'                => 'Parent Tag',
		'parent_item_colon'          => 'Parent Tag:',
		'new_item_name'              => 'New Tag Name',
		'add_new_item'               => 'Add New Tag',
		'edit_item'                  => 'Edit Tag',
		'update_item'                => 'Update Tag',
		'separate_items_with_commas' => 'Separate tags with commas',
		'search_items'               => 'Search Tags',
		'add_or_remove_items'        => 'Add or remove tags',
		'choose_from_most_used'      => 'Choose from the most used tag',
		'not_found'                  => 'Not Found',
	);
	$exptag_args = array(
		'labels'                     => $exptag_labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => false,
		'query_var'					=> 'exptag'
	);
	register_taxonomy( 'exp_tags', array( 'explorations' ), $exptag_args );	
	

	
}
add_action('init','my_taxonomies',0);





function mra_rewrites() {
	add_rewrite_rule( '([^/]+)/list', 'index.php?archives=$matches[1]', 'top' );
}
add_action('init','mra_rewrites');




function mra_register_query_vars($vars) {
	$vars[] = 'archives';
	return $vars;
}
add_filter( 'query_vars', 'mra_register_query_vars' );

function mra_url_rewrite_templates() {
	if ( get_query_var( 'archives' ) ) {
		add_filter( 'template_include', function() {
			return get_template_directory() . '/full-archive.php';
		});
	}
}
add_action( 'template_redirect', 'mra_url_rewrite_templates' );


// do not use on live/production servers
add_action( 'init','maybe_rewrite_rules' );
function maybe_rewrite_rules() {

	$ver = filemtime( __FILE__ ); // Get the file time for this file as the version number
	$defaults = array( 'version' => 0, 'time' => time() );
	$r = wp_parse_args( get_option( __CLASS__ . '_flush', array() ), $defaults );

	if ( $r['version'] != $ver || $r['time'] + 172800 < time() ) { // Flush if ver changes or if 48hrs has passed.
		flush_rewrite_rules();
		// trace( 'flushed' );
		$args = array( 'version' => $ver, 'time' => time() );
		if ( ! update_option( __CLASS__ . '_flush', $args ) )
			add_option( __CLASS__ . '_flush', $args );
	}

}


function save_news_meta($postID) {

	$this_post = get_post($postID);

	if($this_post->post_type == 'news') {

		$post_date = $this_post->post_date;
		$today_obj = new DateTime($post_date);
		$today = $today_obj->format('YmdHi');

		$news_date = get_field('news_date',$postID);

		if( empty($news_date) ) {
			update_field('field_55329ad6c457c',$today,$postID);
		}

	} 

}

add_action('acf/save_post','save_news_meta',20);


function mra_query_update($query) {

	if ( !is_admin() ) {

	if ( get_query_var( 'archives' ) ) {
		if ($query->is_main_query()) {
			$query->query_vars[post_type] = get_query_var('archives');
			$query->query_vars[posts_per_page] = -1;
			$query->query_vars[orderby] = 'menu_order';
			$query->query_vars[order] = 'DESC';
		}
	}
	
	if ( is_post_type_archive('projects') || is_post_type_archive('people') || is_post_type_archive('explorations') ) {
		if($query->is_main_query()) {
			$query->query_vars[orderby] = 'menu_order';
			$query->query_vars[order] = 'ASC';
			$query->query_vars[posts_per_page] = -1;
		}
	}
	
	if ( is_post_type_archive('news') || get_query_var('archives') == 'news' ) {
		if($query->is_main_query()) {
			$query->query_vars[meta_key] = 'news_date';
			$query->query_vars[orderby] = 'meta_value_num';
			$query->query_vars[order] = 'DESC';
		}
		
		if( is_post_type_archive('news') ) {
			if($query->is_main_query()) { 
				$query->query_vars[posts_per_page] = 3;
			}
		}
	}
	}
}
add_action('pre_get_posts','mra_query_update');

function mra_flush_rewrites() {
	my_post_types();
	flush_rewrite_rules(true);
}
register_activation_hook( __FILE__, 'mra_flush_rewrites' );

function remove_taxon_meta() {
	remove_meta_box( 'tagsdiv-proj_type', 'projects', 'side' );
	remove_meta_box( 'tagsdiv-proj_tags', 'projects', 'side' );
	remove_meta_box( 'tagsdiv-exp_tags', 'explorations', 'side' );
}

add_action( 'admin_menu' , 'remove_taxon_meta' );

function mra_flush_rewrites_deactivate() {
	flush_rewrite_rules(true);
}
register_deactivation_hook( __FILE__, 'mra_flush_rewrites_deactivate' );

?>