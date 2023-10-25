<?php
/*
Template Name: Template Home
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin: 0 !important">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div>
            
        </div>
    </header>
    <div class="section_2_home">
        <div class="section_2_home_title_container">
            <h1 class="section_2_home_title"><?php echo esc_html(get_theme_mod('title_section_2')); ?></h1>
        </div>
        <div class="section_2_home_text_content_container">
            <p><?php echo esc_html(get_theme_mod('parrafo1_section_2')); ?></p>
            <p><?php echo esc_html(get_theme_mod('parrafo2_section_2')); ?></p>
        </div>
    </div>

    <div class="section_3_home">
        <div class="section_3_home_img_container">
            <img src="<?php echo esc_html(get_theme_mod('image_section_3')); ?>">
        </div>
    </div>

    <div class="section_4_home">
        <div class="section_4_home_title_container">
            <h1 class="section_4_home_title"><?php echo esc_html(get_theme_mod('title_section_4')); ?></h1>
        </div>
        <div class="section_4_home_text_content_container">
            <p><?php echo esc_html(get_theme_mod('parrafo1_section_4')); ?></p>
        </div>
    </div>
    
    <?php
        get_footer();
    ?>
   <script> 
    
   </script>
