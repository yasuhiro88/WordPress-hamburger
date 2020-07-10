<?php
    add_theme_support( 'menus' );
    add_theme_support('title-tag');

    // タイトルの出力
    function hamburger_title($title) {
        if (is_front_page() && is_home() ) {
            $title = get_bloginfo('name','display');
        } elseif (is_singular()) {
            $title = single_post_title(",false");
        }
        return $title;
    }
    add_filter('pre_getdocument_title','hambuger_title');


    function hamburger_script() {
        wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.6.3/css/all.css');
        wp_enqueue_style('style',get_template_directory_uri().'/css/style.css');

        wp_enqueue_script('ajax',"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js");
        wp_enqueue_script('hamburger',get_template_directory_uri().'/js/hamburger.js');
    }

    add_action('wp_enqueue_scripts','hamburger_script'); 
    add_filter( 'show_admin_bar', '__return_false' );
