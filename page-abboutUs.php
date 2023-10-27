<?php
/*
Template Name: Template Abbout Us
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
    <div class="section_1_about_us">
        <div class="section_1_abbout_us_title_container">
            <h1 class="section_1_abbout_us_title">
                <?php
                    $title = esc_html(get_theme_mod('title_section_1_abbout_us'));
                    $boldedWord = 'Smart Lock'; // Replace with the word you want to bold
                    echo str_replace($boldedWord, '<span style="font-weight: bold;">' . $boldedWord . '</span>', $title);
                ?>
            </h1>
        </div>
        <div class="section_2_abbout_us_text_content_container">
            <p>
                <?php
                    $title = esc_html(get_theme_mod('parrafo1_section_1_abbout_us'));
                    $boldedWord = 'Smart Lock'; // Replace with the word you want to bold
                    echo str_replace($boldedWord, '<span style="font-weight: bold;">' . $boldedWord . '</span>', $title);
                ?>
            </p>
        </div>
    </div>
    <?php
        get_footer();
    ?>
   <script> 
    
   </script>
