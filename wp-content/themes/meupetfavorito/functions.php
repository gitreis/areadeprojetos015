<?php

function load_styles()
{
  wp_register_style('bootstrap_style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css');
  wp_register_script('bootstrap_script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.6', true);

  wp_enqueue_style('bootstrap_style');
  wp_enqueue_script('bootstrap_script');
}

function load_menus()
{
  register_nav_menus([
    'header-menu' => __('Menu do Cabeçalho'),
    'footer-menu' => __('Menu do Rodapé'),
  ]);
}

function registrar_menus()
{
  register_nav_menus([
    'header-menu' => 'Menu Principal do Cabeçalho'
  ]);
}

add_action('after_setup_theme', 'load_menus', 'load_styles', 'registrar_menus');
add_action('wp_enqueue_scripts', 'load_styles');
add_theme_support('post-thumbnails');
