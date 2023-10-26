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
            <h1 class="section_2_home_title">
                <?php
                    $title = esc_html(get_theme_mod('title_section_2'));
                    $boldedWord = 'RFID'; // Replace with the word you want to bold
                    echo str_replace($boldedWord, '<span style="font-weight: bold;">' . $boldedWord . '</span>', $title);
                ?>
            </h1>
        </div>
        <div class="section_2_home_text_content_container">
            <p><?php echo esc_html(get_theme_mod('parrafo1_section_2')); ?></p>
            <p>
                <?php
                    $paragraph = esc_html(get_theme_mod('parrafo2_section_2'));
                    // Words to bold
                    $boldedWords = array('RFID', 'Los precintos');
                    foreach ($boldedWords as $word) {
                        $paragraph = str_replace($word, '<span style="font-weight: bold;">' . $word . '</span>', $paragraph);
                    }
                    echo $paragraph;
                ?>
            </p>
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
            <p>
                <?php
                    $paragraph = esc_html(get_theme_mod('parrafo1_section_4'));
                    // Words to bold
                    $boldedWords = array('Smart Lock', 'para proteger y rastrear objetos o activos de gran valor.');
                    foreach ($boldedWords as $word) {
                        $paragraph = str_replace($word, '<span style="font-weight: bold;">' . $word . '</span>', $paragraph);
                    }
                    echo $paragraph;
                ?>
            </p>
        </div>
    </div>

    <div class="section_5_home">
        <div class="section_5_home_img_container">
            <img src="<?php echo esc_html(get_theme_mod('image_bg_section_5')); ?>">
        </div>
        <div class="section_5_home_text_container">
            <div class="section_5_home_first_paragraph">
                <h1 class="section_5_home_title">
                    <?php
                        $title = esc_html(get_theme_mod('title1_section_5'));
                        $boldedWord = 'PRECINTO RFID'; // Replace with the word you want to bold
                        echo str_replace($boldedWord, '<span style="font-weight: bold;">' . $boldedWord . '</span>', $title);
                    ?>
                </h1>
                <p><?php echo esc_html(get_theme_mod('parrafo1_section_5')); ?></p>
                <p><?php echo esc_html(get_theme_mod('parrafo2_section_5')); ?></p>
                <p><?php echo esc_html(get_theme_mod('parrafo3_section_5')); ?></p>
            </div>
            <div class="section_5_home_second_paragraph">
                <h1 class="section_5_home_title">
                    <?php
                        $title = esc_html(get_theme_mod('title2_section_5'));
                        $boldedWord = 'TECNOLOGÍA RFID'; // Replace with the word you want to bold
                        echo str_replace($boldedWord, '<span style="font-weight: bold;">' . $boldedWord . '</span>', $title);
                    ?>
                </h1>
                <p><?php echo esc_html(get_theme_mod('parrafo4_section_5')); ?></p>
                <p><?php echo esc_html(get_theme_mod('parrafo5_section_5')); ?></p>
            </div>
        </div>
    </div>
    <div class="section_6_home">
        <div class="section_6_home_title_image_container">
            <div class="section_6_home_title_container">
                <h1 class="section_6_home_title">
                    <?php
                        $title = esc_html(get_theme_mod('title_section_6'));
                        $boldedWord = 'Smart Lock?'; // Replace with the word you want to bold
                        echo str_replace($boldedWord, '<span style="font-weight: bold;">' . $boldedWord . '</span>', $title);
                    ?>
                </h1>
            </div>
            <div class="section_6_home_image_container">
                <img class="section_6_home_image" src="<?php echo esc_html(get_theme_mod('image_section_6')); ?>">
            </div>
        </div>
        <div class="section_6_home_text_content_container">
            <p>
                <?php
                    $paragraph = esc_html(get_theme_mod('parrafo1_section_6'));
                    $boldedWord = 'Smart Lock'; // Replace with the word you want to bold
                    echo str_replace($boldedWord, '<span style="font-weight: bold;">' . $boldedWord . '</span>', $paragraph);
                ?>
            </p>
            <p>
                <?php
                    $paragraph = esc_html(get_theme_mod('parrafo2_section_6'));
                    $boldedWord = 'Smart Lock'; // Replace with the word you want to bold
                    echo str_replace($boldedWord, '<span style="font-weight: bold;">' . $boldedWord . '</span>', $paragraph);
                ?>
            </p>
            <p><?php echo esc_html(get_theme_mod('parrafo3_section_6')); ?></p>
            <p><?php echo esc_html(get_theme_mod('parrafo4_section_6')); ?></p>
        </div>
    </div>
    <?php
        get_footer();
    ?>
   <script> 
    
   </script>
