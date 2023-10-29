<?php
/*
Template Name: Template FAQ
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin: 0 !important">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
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
            <nav class="navbar">
                <div class="logo_header">
                    <a href="#" class="logo"><img src="<?php echo esc_html(get_theme_mod('logo_smartlock_desktop')); ?>"
                            style="
    width: 150px;"></a>
                    <button class=" navbar_toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <ul class="main_nav">
                    <li>
                        <a href="#" class="nav_links">INICIO</a>
                    </li>
                    <li>
                        <a href="#" class="nav_links">SOBRE NOSOTROS</a>
                    </li>
                    <li>
                        <a href="#" class="nav_links">FAQ</a>
                    </li>
                    <li>
                        <a href="#" class="nav_links">CONTACTO</a>
                    </li>
                </ul>

            </nav>
            <div class="content_in_header_FAQ">
                <h2 class="content_in_header_h2_FAQ"><?php echo get_theme_mod('title_section_1_FAQ'); ?></h2>
            </div>
        </div>
    </header>

    <div class="FAQ_content_main">
        <div class="Title_questions_FAQ">
            <h2><?php echo get_theme_mod('title_section_2_FAQ'); ?></h2>
        </div>
    </div>
    <div class="questions_FAQ_acordeon">
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-button"><?php echo get_theme_mod('question_1_section_2_FAQ'); ?></div>
                <div class="accordion-content"><?php echo get_theme_mod('answer_1_section_2_FAQ'); ?></div>
            </div>
            <div class="accordion-item">
                <div class="accordion-button"><?php echo get_theme_mod('question_2_section_2_FAQ'); ?></div>
                <div class="accordion-content"><?php echo get_theme_mod('answer_2_section_2_FAQ'); ?></div>
            </div>
            <div class="accordion-item">
                <div class="accordion-button"><?php echo get_theme_mod('question_3_section_2_FAQ'); ?></div>
                <div class="accordion-content"><?php echo get_theme_mod('answer_3_section_2_FAQ'); ?></div>
            </div>
            <div class="accordion-item">
                <div class="accordion-button"><?php echo get_theme_mod('question_4_section_2_FAQ'); ?></div>
                <div class="accordion-content"><?php echo get_theme_mod('answer_4_section_2_FAQ'); ?></div>
            </div>
            <div class="accordion-item">
                <div class="accordion-button"><?php echo get_theme_mod('question_5_section_2_FAQ'); ?></div>
                <div class="accordion-content"><?php echo get_theme_mod('answer_5_section_2_FAQ'); ?></div>
            </div>
            <div class="accordion-item">
                <div class="accordion-button"><?php echo get_theme_mod('question_6_section_2_FAQ'); ?></div>
                <div class="accordion-content"><?php echo get_theme_mod('answer_6_section_2_FAQ'); ?></div>
            </div>
            <div class="accordion-item">
                <div class="accordion-button"><?php echo get_theme_mod('question_7_section_2_FAQ'); ?></div>
                <div class="accordion-content"><?php echo get_theme_mod('answer_7_section_2_FAQ'); ?></div>
            </div>
            <div class="accordion-item">
                <div class="accordion-button"><?php echo get_theme_mod('question_8_section_2_FAQ'); ?></div>
                <div class="accordion-content"><?php echo get_theme_mod('answer_8_section_2_FAQ'); ?></div>
            </div>
            <div class="accordion-item">
                <div class="accordion-button"><?php echo get_theme_mod('question_9_section_2_FAQ'); ?></div>
                <div class="accordion-content"><?php echo get_theme_mod('answer_9_section_2_FAQ'); ?></div>
            </div>
            <div class="accordion-item">
                <div class="accordion-button"><?php echo get_theme_mod('question_10_section_2_FAQ'); ?></div>
                <div class="accordion-content"><?php echo get_theme_mod('answer_10_section_2_FAQ'); ?></div>
            </div>
            <div class="accordion-item">
                <div class="accordion-button"><?php echo get_theme_mod('question_11_section_2_FAQ'); ?></div>
                <div class="accordion-content"><?php echo get_theme_mod('answer_11_section_2_FAQ'); ?></div>
            </div>
        </div>
    </div>


    <?php
        get_footer();
    ?>

    <script type="text/javascript">
    const navToggle = document.querySelector(".navbar_toggle");
    const links = document.querySelector(".main_nav");

    navToggle.addEventListener('click', function() {
        links.classList.toggle("show_nav");
    })
    </script>