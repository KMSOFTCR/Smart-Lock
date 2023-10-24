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
    $wp_customize->add_section('footer', array(
      'title' => 'Pie de página sección #1',
      'priority' => 30
    ));

    $wp_customize->add_setting('title_map_contact', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_map_contact', array(
      'label' => 'Titulo de Dirección',
      'section' => 'footer',
      'type' => 'text',
    ));

    $wp_customize->add_setting('descrip_map_contact', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('descrip_map_contact', array(
      'label' => 'Descripción de email',
      'section' => 'footer',
      'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('img_map_contact', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_map_contact', array(
      'label' => 'Imagen de mapa',
      'section' => 'footer',
      'settings' => 'img_map_contact',
    )));


    $wp_customize->add_setting('title_email_contact', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_email_contact', array(
      'label' => 'Titulo de Correo',
      'section' => 'footer',
      'type' => 'text',
    ));

    $wp_customize->add_setting('descrip_email_contact', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('descrip_email_contact', array(
      'label' => 'Descripción de email',
      'section' => 'footer',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('img_email_contact', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_email_contact', array(
      'label' => 'Imagen de email',
      'section' => 'footer',
      'settings' => 'img_email_contact',
    )));

    $wp_customize->add_setting('title_llamanos_contact', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_llamanos_contact', array(
      'label' => 'Titulo de llamanos',
      'section' => 'footer',
      'type' => 'text',
    ));

    $wp_customize->add_setting('descrip_llamanos_contact', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('descrip_llamanos_contact', array(
      'label' => 'Descripción de llamanos',
      'section' => 'footer',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('img_phone_contact', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_phone_contact', array(
      'label' => 'Imagen de teléfono',
      'section' => 'footer',
      'settings' => 'img_phone_contact',
    )));

    $wp_customize->add_section('footer_2', array(
      'title' => 'Pie de página sección #2',
      'priority' => 30
    ));

    $wp_customize->add_setting('img_contenedor', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_contenedor', array(
      'label' => 'Imagen de contenedor formulario',
      'section' => 'footer_2',
      'settings' => 'img_contenedor',
    )));

    $wp_customize->add_section('footer_3', array(
      'title' => 'Pie de página sección #3',
      'priority' => 30
    ));

    $wp_customize->add_setting('img_footer_last_section', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_footer_last_section', array(
      'label' => 'Imagen footer',
      'section' => 'footer_3',
      'settings' => 'img_footer_last_section',
    )));


   

}
add_action('customize_register', 'theme_customizer_settings');

?>