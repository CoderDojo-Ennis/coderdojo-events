<?php
/**
 * Add aditional post types
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoderDojo Grading
 * @subpackage CoderDojo
 * @since 1.0.0
 */

function cde_register_custom_post_types() {

    /**
	 * Post Type: Events.
	 */

	$labels = [
		"name" => __( "Events", "coderdojo" ),
		"singular_name" => __( "Event", "coderdojo" ),
		"menu_name" => __( "Events", "coderdojo" ),
		"all_items" => __( "All Events", "coderdojo" ),
		"add_new" => __( "Add new", "coderdojo" ),
		"add_new_item" => __( "Add new Event", "coderdojo" ),
		"edit_item" => __( "Edit Event", "coderdojo" ),
		"new_item" => __( "New Event", "coderdojo" ),
		"view_item" => __( "View Event", "coderdojo" ),
		"view_items" => __( "View Events", "coderdojo" ),
		"search_items" => __( "Search Events", "coderdojo" ),
		"not_found" => __( "No Events found", "coderdojo" ),
		"not_found_in_trash" => __( "No Events found in bin", "coderdojo" ),
		"parent" => __( "Parent Event:", "coderdojo" ),
		"featured_image" => __( "Featured image for this Event", "coderdojo" ),
		"set_featured_image" => __( "Set featured image for this Event", "coderdojo" ),
		"remove_featured_image" => __( "Remove featured image for this Event", "coderdojo" ),
		"use_featured_image" => __( "Use as featured image for this Event", "coderdojo" ),
		"archives" => __( "Event archives", "coderdojo" ),
		"insert_into_item" => __( "Insert into Event", "coderdojo" ),
		"uploaded_to_this_item" => __( "Upload to this Event", "coderdojo" ),
		"filter_items_list" => __( "Filter Events list", "coderdojo" ),
		"items_list_navigation" => __( "Events list navigation", "coderdojo" ),
		"items_list" => __( "Events list", "coderdojo" ),
		"attributes" => __( "Events attributes", "coderdojo" ),
		"name_admin_bar" => __( "Event", "coderdojo" ),
		"item_published" => __( "Event published", "coderdojo" ),
		"item_published_privately" => __( "Event published privately.", "coderdojo" ),
		"item_reverted_to_draft" => __( "Event reverted to draft.", "coderdojo" ),
		"item_scheduled" => __( "Event scheduled", "coderdojo" ),
		"item_updated" => __( "Event updated.", "coderdojo" ),
		"parent_item_colon" => __( "Parent Event:", "coderdojo" ),
	];

	$args = [
		"label" => __( "Events", "coderdojo" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "events", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 23,
		"menu_icon" => "dashicons-tickets-alt",
		"supports" => [ "title", "editor", "excerpt", "thumbnail" ],
	];

	register_post_type( "event", $args );
}

add_action( 'init', 'cde_register_custom_post_types' );

?>