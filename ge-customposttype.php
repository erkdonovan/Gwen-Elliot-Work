<?php

/*
Plugin Name: Site Plugin for gwenelliot.com
Description: Site specific, theme independent code changes for gwenelliot.com
Author: http://ashleybrown.ca
*/


// ===========================================================================================
// CUSTOM ACTIONS / FILTERS ------------------------------------------------------------------

add_action( 'init', 'codex_podcast_init' );

// ===========================================================================================
// ACTION HANDLERS ---------------------------------------------------------------------------


/**
 * Register a podcast post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_podcast_init() {
    $labels = array(
        'name'               => _x( 'Your Big Break', 'post type general name' ),
        'singular_name'      => _x( 'Your Big Break', 'post type singular name' ),
        'menu_name'          => _x( 'Your Big Break', 'admin menu' ),
        'name_admin_bar'     => _x( 'Your Big Break', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Podcast' ),
        'add_new_item'       => __( 'Add New Podcast' ),
        'new_item'           => __( 'New Podcast' ),
        'edit_item'          => __( 'Edit Podcast' ),
        'view_item'          => __( 'View Podcast' ),
        'all_items'          => __( 'All Podcasts' ),
        'search_items'       => __( 'Search Podcasts' ),
        'parent_item_colon'  => __( 'Parent Your Big Break:' ),
        'not_found'          => __( 'No Podcasts found.' ),
        'not_found_in_trash' => __( 'No Podcasts found in Trash.' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Your Big Break Podcast' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => flase,
        'query_var'          => true,
        'menu_icon'          => 'dashicons-admin-collapse',
        'menu_position'      => 5,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'=>true,
        'capability_type'=>'post',
        'has_archive' => true
    );

    register_post_type( 'yourbigbreak', $args );
}

