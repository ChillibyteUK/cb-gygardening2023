<?php

function cb_register_post_types()
{

    $labels = [
        "name" => __("Gardeners", "cb-gygardening2023"),
        "singular_name" => __("Gardener", "cb-gygardening2023"),
    ];

    $args = [
        "label" => __("Gardeners", "cb-gygardening2023"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => false,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "menu_icon" => "dashicons-open-folder",
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => false,
        "query_var" => true,
        "supports" => [ "title", "thumbnail", "editor" ],
        "show_in_graphql" => false,
        "exclude_from_search" => true
    ];

    register_post_type("gardener", $args);

}
add_action('init', 'cb_register_post_types');



// add_action( 'after_switch_theme', 'cb_rewrite_flush' );
// function cb_rewrite_flush() {
//     cb_register_post_types();
//     flush_rewrite_rules();
// }
