<?php
namespace WPRealProperty;

class WP_Real_Property {

    private static $instance = null;

    private function __construct() {

        add_action('init', array($this,'register_real_estate_post_type'));


    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function register_real_estate_post_type() {

         $labels = [
            'name'               => _x('Properties', 'post type general name', 'wp-real-property'),
            'singular_name'      => _x('Property', 'post type singular name', 'wp-real-property'),
            'menu_name'          => _x('Properties', 'admin menu', 'wp-real-property'),
            'name_admin_bar'     => _x('Property', 'add new on admin bar', 'wp-real-property'),
            'add_new'            => _x('Add New', 'property', 'wp-real-property'),
            'add_new_item'       => __('Add New Property', 'wp-real-property'),
            'new_item'           => __('New Property', 'wp-real-property'),
            'edit_item'          => __('Edit Property', 'wp-real-property'),
            'view_item'          => __('View Property', 'wp-real-property'),
            'all_items'          => __('All Properties', 'wp-real-property'),
            'search_items'       => __('Search Properties', 'wp-real-property'),
            'parent_item_colon'  => __('Parent Properties:', 'wp-real-property'),
            'not_found'          => __('No properties found.', 'wp-real-property'),
            'not_found_in_trash' => __('No properties found in Trash.', 'wp-real-property')
        ];

        $args = [
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => ['slug' => 'real-property'],
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title', 'editor', 'thumbnail', 'custom-fields'],
        ];

        register_post_type('real-property', $args);

    }





}