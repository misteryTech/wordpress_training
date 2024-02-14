<?php

//load style sheets
function  load_css()
{
        wp_register_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css',
    array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() .'/css/main.css',
    array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts','load_css');

//load javascript
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js','jquery',false,true);
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts','load_js');


//theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);


add_image_size('blog-large', 800,400, true);
add_image_size('blog-small', 300,200, true);


function my_sidebars()
{

    register_sidebar(
        array(
                'name' => 'Page Sidebar',
                'id' => 'page-sidebar',
                'before-title' => ' <h4 class="widget-title">',
                'after-title' => '</h4>'


        )
    );

    register_sidebar(
        array(


                'name' => 'Blog Sidebar',
                'id' => 'blog-sidebar',
                'before-title' => ' <h4 class="widget-title">',
                'after-title' => '</h4>'


        )
    );
}


add_action('widgets_init','my_sidebars');


function my_first_post_type(){

    $args = array(
        'labels' => array(
                        'name' => 'Cars',
                        'singular_name'=>'Cars',
        ),
        'heirarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
        //'rewrite' => array('slug' => 'cars'),
    );
    register_post_type('cars',$args);
}
add_action('init','my_first_post_type');



function my_first_taxonomy(){
            $args = array(
                'labels' => array(
                    'name' => 'Brand',
                    'singular_name'=>'Brand',
    ),
    'public' => true,
    'heirarchical' => false,
            );
            register_taxonomy('brands',array('cars'),$args);
}
add_action( 'init', 'my_first_taxonomy');