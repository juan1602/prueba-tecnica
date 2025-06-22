<?php
function cargar_recursos_tema() {
  // CSS principal del tema
  wp_enqueue_style('estilo', get_stylesheet_uri());

  // Swiper CSS
  wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');

  // Swiper JS
  wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

  // Script personalizado
  wp_enqueue_script('banner-api', get_template_directory_uri() . '/js/banner.js', array('swiper-js'), null, true);

  wp_enqueue_script('menu-toggle', get_template_directory_uri() . '/js/menu-toggle.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'cargar_recursos_tema');

// Registrar Custom Post Type: Pilares
function registrar_cpt_pilares() {
    $args = array(
        'labels' => array(
            'name' => 'Pilares',
            'singular_name' => 'Pilar',
            'add_new' => 'Agregar Pilar',
            'add_new_item' => 'Agregar nuevo Pilar',
            'edit_item' => 'Editar Pilar',
            'new_item' => 'Nuevo Pilar',
            'view_item' => 'Ver Pilar',
            'search_items' => 'Buscar Pilar',
            'not_found' => 'No se encontraron Pilares',
            'not_found_in_trash' => 'No se encontraron Pilares en la papelera',
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'pilares'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-lightbulb',
        'show_in_rest' => true // para Gutenberg o futura API
    );

    register_post_type('pilar', $args);
}
add_action('init', 'registrar_cpt_pilares');
