<?php
/**
 * Revelans IT theme setup
 */

add_action('after_setup_theme', function(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);
  register_nav_menus([
    'primary' => __('Hoofdmenu', 'revelansit'),
  ]);
});

class RevelansIT_Primary_Walker extends Walker_Nav_Menu {
  public function start_lvl( &$output, $depth = 0, $args = null ){}
  public function end_lvl( &$output, $depth = 0, $args = null ){}

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ){
    $atts = [];
    $atts['href'] = ! empty($item->url) ? $item->url : '';
    if (in_array('current-menu-item', $item->classes ?? [], true) || in_array('current_page_item', $item->classes ?? [], true)) {
      $atts['aria-current'] = 'page';
    }
    $attributes = '';
    foreach ($atts as $attr => $value) {
      if (!empty($value)) {
        $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
      }
    }

    $title = apply_filters('the_title', $item->title, $item->ID);
    $output .= '<a' . $attributes . '>' . esc_html($title) . '</a>';
  }

  public function end_el( &$output, $item, $depth = 0, $args = null ){}
}

function revelansit_primary_menu_fallback(){
  $items = [
    ['label' => __('Startpagina', 'revelansit'), 'url' => home_url('/')],
    ['label' => __('Diensten', 'revelansit'), 'url' => home_url('/diensten')],
    ['label' => __('Portfolio', 'revelansit'), 'url' => home_url('/portfolio')],
    ['label' => __('Over ons', 'revelansit'), 'url' => home_url('/over-ons')],
    ['label' => __('Contact', 'revelansit'), 'url' => home_url('/contact')],
  ];

  $output = array_reduce($items, function($carry, $item){
    $carry .= '<a href="' . esc_url($item['url']) . '">' . esc_html($item['label']) . '</a>';
    return $carry;
  }, '');

  echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('revelansit-theme', get_theme_file_uri('assets/css/styles.css'), [], '0.1.0');
  wp_enqueue_script('revelansit-main', get_theme_file_uri('assets/js/main.js'), [], '0.1.0', true);
});
