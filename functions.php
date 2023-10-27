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

    // Home 
    // Section 1
    $wp_customize->add_section('section_1_home', array(
      'title' => 'Sección Home #1',
      'priority' => 30
    ));

    $wp_customize->add_setting('img_fnd_header_h1', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_fnd_header_h1', array(
      'label' => 'Imagen fondo header',
      'section' => 'section_1_home',
      'settings' => 'img_fnd_header_h1',
    )));

    $wp_customize->add_setting('logo_smartlock_desktop', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_smartlock_desktop', array(
      'label' => 'Logo Desktop',
      'section' => 'section_1_home',
      'settings' => 'logo_smartlock_desktop',
    )));

    $wp_customize->add_setting('title_header_section_1', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_header_section_1', array(
      'label' => 'Titulo 1',
      'section' => 'section_1_home',
      'type' => 'text',
    ));

    $wp_customize->add_setting('title_header_section_2', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_header_section_2', array(
      'label' => 'Titulo 2',
      'section' => 'section_1_home',
      'type' => 'text',
    ));

    $wp_customize->add_setting('title_header_section_3', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_header_section_3', array(
      'label' => 'Titulo 3',
      'section' => 'section_1_home',
      'type' => 'text',
    ));

    // Section 2
    $wp_customize->add_section('section_2_home', array(
      'title' => 'Sección Home #2',
      'priority' => 30
    ));

    $wp_customize->add_setting('title_section_2', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_section_2', array(
      'label' => 'Titulo',
      'section' => 'section_2_home',
      'type' => 'text',
    ));

    $wp_customize->add_setting('parrafo1_section_2', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo1_section_2', array(
      'label' => 'Parrafo 1',
      'section' => 'section_2_home',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('parrafo2_section_2', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo2_section_2', array(
      'label' => 'Parrafo 2',
      'section' => 'section_2_home',
      'type' => 'textarea',
    ));

    // Section 3
    $wp_customize->add_section('section_3_home', array(
      'title' => 'Sección Home #3',
      'priority' => 30
    ));

    $wp_customize->add_setting('image_section_3', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_section_3', array(
      'label' => 'Imagen',
      'section' => 'section_3_home',
      'settings' => 'image_section_3',
    )));

    // Section 4
    $wp_customize->add_section('section_4_home', array(
      'title' => 'Sección Home #4',
      'priority' => 30
    ));

    $wp_customize->add_setting('title_section_4', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_section_4', array(
      'label' => 'Titulo',
      'section' => 'section_4_home',
      'type' => 'text',
    ));

    $wp_customize->add_setting('parrafo1_section_4', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo1_section_4', array(
      'label' => 'Parrafo 1',
      'section' => 'section_4_home',
      'type' => 'textarea',
    ));

    // Section 5
    $wp_customize->add_section('section_5_home', array(
      'title' => 'Sección Home #5',
      'priority' => 30
    ));

    $wp_customize->add_setting('image_bg_section_5', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_bg_section_5', array(
      'label' => 'Imagen de fondo',
      'section' => 'section_5_home',
      'settings' => 'image_bg_section_5',
    )));

    $wp_customize->add_setting('title1_section_5', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title1_section_5', array(
      'label' => 'Titulo 1',
      'section' => 'section_5_home',
      'type' => 'text',
    ));

    $wp_customize->add_setting('parrafo1_section_5', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo1_section_5', array(
      'label' => 'Parrafo 1',
      'section' => 'section_5_home',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('parrafo2_section_5', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo2_section_5', array(
      'label' => 'Parrafo 2',
      'section' => 'section_5_home',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('parrafo3_section_5', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo3_section_5', array(
      'label' => 'Parrafo 3',
      'section' => 'section_5_home',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('title2_section_5', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title2_section_5', array(
      'label' => 'Titulo 2',
      'section' => 'section_5_home',
      'type' => 'text',
    ));

    $wp_customize->add_setting('parrafo4_section_5', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo4_section_5', array(
      'label' => 'Parrafo 4',
      'section' => 'section_5_home',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('parrafo5_section_5', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo5_section_5', array(
      'label' => 'Parrafo 5',
      'section' => 'section_5_home',
      'type' => 'textarea',
    ));

    // Section 6
    $wp_customize->add_section('section_6_home', array(
      'title' => 'Sección Home #6',
      'priority' => 30
    ));

    $wp_customize->add_setting('title_section_6', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_section_6', array(
      'label' => 'Titulo',
      'section' => 'section_6_home',
      'type' => 'text',
    ));

    $wp_customize->add_setting('image_section_6', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_section_6', array(
      'label' => 'Imagen',
      'section' => 'section_6_home',
      'settings' => 'image_section_6',
    )));

    $wp_customize->add_setting('parrafo1_section_6', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo1_section_6', array(
      'label' => 'Parrafo 1',
      'section' => 'section_6_home',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('parrafo2_section_6', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo2_section_6', array(
      'label' => 'Parrafo 2',
      'section' => 'section_6_home',
      'type' => 'textarea',
    ));
   
    $wp_customize->add_setting('parrafo3_section_6', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo3_section_6', array(
      'label' => 'Parrafo 3',
      'section' => 'section_6_home',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('parrafo4_section_6', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo4_section_6', array(
      'label' => 'Parrafo 4',
      'section' => 'section_6_home',
      'type' => 'textarea',
    ));

    // FAQ
    // Section 1
    $wp_customize->add_section('section_1_FAQ', array(
      'title' => 'Sección FAQ #1',
      'priority' => 30
    ));

    $wp_customize->add_setting('img_fnd_header_h1_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_fnd_header_h1_FAQ', array(
      'label' => 'Imagen fondo header',
      'section' => 'section_1_FAQ',
      'settings' => 'img_fnd_header_h1_FAQ',
    )));

    $wp_customize->add_setting('title_section_1_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_section_1_FAQ', array(
      'label' => 'Titulo ',
      'section' => 'section_1_FAQ',
      'type' => 'text',
    ));

    // Section 1
    $wp_customize->add_section('section_2_FAQ', array(
      'title' => 'Sección FAQ #2',
      'priority' => 30
    ));

    $wp_customize->add_setting('title_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_section_2_FAQ', array(
      'label' => 'Titulo ',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('question_1_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('question_1_section_2_FAQ', array(
      'label' => 'Pregunta #1 ',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('answer_1_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('answer_1_section_2_FAQ', array(
      'label' => 'Respuesta #1 ',
      'section' => 'section_2_FAQ',
      'type' => 'textarea',
    ));


    $wp_customize->add_setting('question_2_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('question_2_section_2_FAQ', array(
      'label' => 'Pregunta #2 ',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('answer_2_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('answer_2_section_2_FAQ', array(
      'label' => 'Respuesta #2 ',
      'section' => 'section_2_FAQ',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('question_3_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('question_3_section_2_FAQ', array(
      'label' => 'Pregunta #3 ',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('answer_3_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('answer_3_section_2_FAQ', array(
      'label' => 'Respuesta #3 ',
      'section' => 'section_2_FAQ',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('question_4_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('question_4_section_2_FAQ', array(
      'label' => 'Pregunta #4 ',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('answer_4_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('answer_4_section_2_FAQ', array(
      'label' => 'Respuesta #4 ',
      'section' => 'section_2_FAQ',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('question_5_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('question_5_section_2_FAQ', array(
      'label' => 'Pregunta #5',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('answer_5_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('answer_5_section_2_FAQ', array(
      'label' => 'Respuesta #5 ',
      'section' => 'section_2_FAQ',
      'type' => 'textarea',
    ));


    $wp_customize->add_setting('question_6_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('question_6_section_2_FAQ', array(
      'label' => 'Pregunta #6',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('answer_6_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('answer_6_section_2_FAQ', array(
      'label' => 'Respuesta #6 ',
      'section' => 'section_2_FAQ',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('question_7_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('question_7_section_2_FAQ', array(
      'label' => 'Pregunta #7',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('answer_7_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('answer_7_section_2_FAQ', array(
      'label' => 'Respuesta #7 ',
      'section' => 'section_2_FAQ',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('question_8_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('question_8_section_2_FAQ', array(
      'label' => 'Pregunta #8',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('answer_8_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('answer_8_section_2_FAQ', array(
      'label' => 'Respuesta #8 ',
      'section' => 'section_2_FAQ',
      'type' => 'textarea',
    ));


    $wp_customize->add_setting('question_9_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('question_9_section_2_FAQ', array(
      'label' => 'Pregunta #9',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('answer_9_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('answer_9_section_2_FAQ', array(
      'label' => 'Respuesta #9 ',
      'section' => 'section_2_FAQ',
      'type' => 'textarea',
    ));

    
    $wp_customize->add_setting('question_10_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('question_10_section_2_FAQ', array(
      'label' => 'Pregunta #10',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('answer_10_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('answer_10_section_2_FAQ', array(
      'label' => 'Respuesta #10 ',
      'section' => 'section_2_FAQ',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('question_11_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('question_11_section_2_FAQ', array(
      'label' => 'Pregunta #11',
      'section' => 'section_2_FAQ',
      'type' => 'text',
    ));

    $wp_customize->add_setting('answer_11_section_2_FAQ', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('answer_11_section_2_FAQ', array(
      'label' => 'Respuesta #11 ',
      'section' => 'section_2_FAQ',
      'type' => 'textarea',
    ));


    // about us 
    // Section 1
    $wp_customize->add_section('section_1_about_us', array(
      'title' => 'Sección About Us #1',
      'priority' => 30
    ));

    $wp_customize->add_setting('title_section_1_about_us', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_section_1_about_us', array(
      'label' => 'Titulo',
      'section' => 'section_1_about_us',
      'type' => 'text',
    ));

    $wp_customize->add_setting('parrafo1_section_1_about_us', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo1_section_1_about_us', array(
      'label' => 'Parrafo 1',
      'section' => 'section_1_about_us',
      'type' => 'textarea',
    ));

    $wp_customize->add_section('section_2_about_us', array(
      'title' => 'Sección About Us #2',
      'priority' => 30
    ));

    $wp_customize->add_setting('image_section_2_about_us', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_section_2_about_us', array(
      'label' => 'Imagen',
      'section' => 'section_2_about_us',
      'settings' => 'image_section_2_about_us',
    )));

    $wp_customize->add_setting('title_section_2_about_us', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_section_2_about_us', array(
      'label' => 'Titulo',
      'section' => 'section_2_about_us',
      'type' => 'text',
    ));

    $wp_customize->add_setting('parrafo1_section_2_about_us', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo1_section_2_about_us', array(
      'label' => 'Parrafo 1',
      'section' => 'section_2_about_us',
      'type' => 'textarea',
    ));

    $wp_customize->add_setting('text_btn_section_2_about_us', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('text_btn_section_2_about_us', array(
      'label' => 'Texto botón',
      'section' => 'section_2_about_us',
      'type' => 'text',
    ));

    $wp_customize->add_setting('url_btn_section_2_about_us', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('url_btn_section_2_about_us', array(
      'label' => 'URL de botón',
      'section' => 'section_2_about_us',
      'type' => 'url',
    ));

    $wp_customize->add_section('section_3_about_us', array(
      'title' => 'Sección About Us #3',
      'priority' => 30
    ));

    $wp_customize->add_setting('title_section_3_about_us', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('title_section_3_about_us', array(
      'label' => 'Titulo',
      'section' => 'section_3_about_us',
      'type' => 'text',
    ));

    $wp_customize->add_setting('parrafo1_section_3_about_us', array(
      'default' => '',
      'transport' => 'refresh',
    ));
  
    $wp_customize->add_control('parrafo1_section_3_about_us', array(
      'label' => 'Parrafo 1',
      'section' => 'section_3_about_us',
      'type' => 'textarea',
    ));

}
add_action('customize_register', 'theme_customizer_settings');

?>