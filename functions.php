<?php

    function new_script_enqueue(){
        wp_enqueue_style("customStyle", get_template_directory_uri()."/css/newTheme.css", array(), "1.0.0", "all");

        if(is_page($page = "budget")){
            wp_enqueue_script("customJS", get_template_directory_uri()."/js/newTheme.js", array(), "1.0.0", true);
        }

    }

    add_action("wp_enqueue_scripts", "new_script_enqueue");

    function new_theme_setup(){
        add_theme_support("menus");

        register_nav_menu("primary", "Primary Header Navigation");
        register_nav_menu("footer", "Footer Navigation");
    }

    add_action("init", "new_theme_setup");

    add_theme_support( 'custom-background');
    add_theme_support( 'custom-header');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video') );

    set_post_thumbnail_size( 150, 150, false );
    add_image_size( 'special-thumbnail', 300, 300, false );
