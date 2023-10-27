<?php
/*
Template Name: Template about Us
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
        <div class="header-background_h1"
            style="background: linear-gradient(to top, #9f9f9f30, #d5d5d559), url(<?php echo get_theme_mod('img_fnd_header_h1_FAQ'); ?>) no-repeat; background-position: center center; background-size: auto;">
            <div class="content_menu_desktop">
                <div class="div_logo_header">
                    <img src="<?php echo esc_html(get_theme_mod('logo_smartlock_desktop')); ?>">
                </div>
                <nav>
                    <?php
                            if (has_nav_menu('primary-menu')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'primary-menu',
                                    'container' => false,
                                    'menu_class' => 'primary-menu'
                                ));
                            }
                        ?>
                </nav>
            </div>
            <div class="content_in_header_FAQ">
                <h2 class="content_in_header_h2_FAQ"><?php echo get_theme_mod('title_section_1_FAQ'); ?></h2>
            </div>
        </div>
    </header>
    <div class="section_1_about_us">
        <div class="section_1_about_us_title_container">
            <h1 class="section_1_about_us_title">
                <?php
                    $title = esc_html(get_theme_mod('title_section_1_about_us'));
                    $boldedWord = 'Smart Lock'; // Replace with the word you want to bold
                    echo str_replace($boldedWord, '<span style="font-weight: bold;">' . $boldedWord . '</span>', $title);
                ?>
            </h1>
        </div>
        <div class="section_1_about_us_text_content_container">
            <p>
                <?php
                    $paragraph = esc_html(get_theme_mod('parrafo1_section_1_about_us'));
                    $boldedWord = 'Smart Lock'; // Replace with the word you want to bold
                    echo str_replace($boldedWord, '<span style="font-weight: bold;">' . $boldedWord . '</span>', $paragraph);
                ?>
            </p>
        </div>
    </div>

    <div class="section_2_about_us">
        <div class="section_2_about_us_img_container"
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo get_theme_mod('image_section_2_about_us'); ?>) no-repeat; background-position: center; background-size: cover;">
            <div class="section_2_about_us_text_content_container">
                <div style="width: 50%;"></div>
                <div class="section_2_info_container" style="width: 60%;">
                    <h2 class="section_2_about_us_title">
                        <?php 
                            $title = esc_html(get_theme_mod('title_section_2_about_us'));
                            $formatted_title = str_replace(',', ',<br>', $title);
                            echo $formatted_title;
                        ?>
                    </h2>
                    <p>
                        <?php echo esc_html(get_theme_mod('parrafo1_section_2_about_us'));?>
                    </p>
                    <div class="section_2_contact_btn">
                        <a
                            href="<?php echo esc_html(get_theme_mod('url_btn_section_2_about_us')); ?>"><?php echo esc_html(get_theme_mod('text_btn_section_2_about_us')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section_3_about_us">
        <div class="section_3_about_us_title_container">
            <h1 class="section_3_about_us_title">
                <?php
                    $title = esc_html(get_theme_mod('title_section_3_about_us'));
                    $boldedWord = 'Smart Lock'; // Replace with the word you want to bold
                    echo str_replace($boldedWord, '<span style="font-weight: bold;">' . $boldedWord . '</span>', $title);
                ?>
            </h1>
        </div>
        <div class="section_3_about_us_text_content_container">
            <p><?php echo esc_html(get_theme_mod('parrafo1_section_3_about_us')); ?></p>
        </div>
    </div>
    <?php
        get_footer();
    ?>
    <script>

    </script>