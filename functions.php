<?php

function EnqStyles () {

  // CSS Styles

  wp_enqueue_style('BootStrap', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css');

  wp_enqueue_style('fontAwesome', get_template_directory_uri(). '/assets/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css');

  wp_enqueue_style('iconicFont', get_template_directory_uri(). '/assets/fonts/iconic/css/material-design-iconic-font.min.css');

  wp_enqueue_style('animateCss', get_template_directory_uri(). '/assets/vendor/animate/animate.css');

  wp_enqueue_style('hambCss', get_template_directory_uri(). '/assets/vendor/css-hamburgers/hamburgers.min.css');

  wp_enqueue_style('animsition', get_template_directory_uri(). '/assets/vendor/animsition/css/animsition.min.css');

  wp_enqueue_style('utilCss', get_template_directory_uri(). '/assets/css/util.min.css');

  wp_enqueue_style('style', get_stylesheet_uri(), NULL, mt_rand(0,9));


// Js Files

wp_enqueue_script('JqueryJs', get_template_directory_uri(). '/assets/vendor/jquery/jquery-3.2.1.min.js', NULL, mt_rand(0,9), true);

wp_enqueue_script('bootJs', get_template_directory_uri(). '/assets/vendor/bootstrap/js/bootstrap.min.js', NULL, mt_rand(0,9), true);

wp_enqueue_script('poppJs', get_template_directory_uri(). '/assets/vendor/bootstrap/js/popper.js', NULL, mt_rand(0,9), true);

wp_enqueue_script('animsJs', get_template_directory_uri(). '/assets/vendor/animsition/js/animsition.min.js', NULL, mt_rand(0,9), true);

wp_enqueue_script('mainJs', get_template_directory_uri(). '/assets/js/main.js', NULL, mt_rand(0,9), true);



}

add_action('wp_enqueue_scripts', 'EnqStyles');


function RegisterImage () {

  add_theme_support('post-thumbnails');
  add_image_size('portrait', 500, 600);
  add_image_size('landscape', 580, 400);


}

add_action('after_setup_theme', 'RegisterImage');
