<?php

wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );

wp_enqueue_script('slimpickin', get_template_directory_uri() . '/components/lib/slimpickin/dist/slimpickin.min.js', false, false, true);
wp_enqueue_script('script', get_template_directory_uri() . '/components/script.js', fasle, false, true);

add_theme_support( 'post-thumbnails' ); 