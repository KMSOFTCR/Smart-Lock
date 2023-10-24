<?php
// Función para cargar los estilos y scripts del tema
function theme_enqueue_scripts() {
  // Estilos del tema
  wp_enqueue_style('theme-style', get_stylesheet_uri());

  // Scripts del tema
  wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/index.js', array('jquery'), '1.0', true);

}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');



// Función para registrar un menú de navegación
function theme_register_menus() {
  register_nav_menus(array(
    'primary-menu' => 'Menú Principal',
    'footer-menu' => 'Menú del Pie de Página'
  ));
}
add_action('init', 'theme_register_menus');




function theme_customizer_settings($wp_customize) {
  $page_id = get_queried_object_id();

    // Agrega las secciones y configuraciones personalizadas aquí
    $wp_customize->add_section('header_image_home', array(
      'title' => 'Sección Home #1 ',
      'priority' => 30
    ));
    
    $wp_customize->add_setting('fondo_header_home', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'fondo_header_home', array(
      'label' => 'Fondo',
      'section' => 'header_image_home',
      'settings' => 'fondo_header_home',
    )));

    $wp_customize->add_setting('logo_website', array(
        'default' => '',
        'transport' => 'refresh',
      ));
    
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_website', array(
        'label' => 'Logo de página',
        'section' => 'header_image_home',
        'settings' => 'logo_website',
      )));

}
add_action('customize_register', 'theme_customizer_settings');

?>