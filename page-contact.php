<?php
/*
Template Name: Template Contact
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
            style="background: linear-gradient(to top, #9f9f9f30, #d5d5d559), url(<?php echo get_theme_mod('img_fnd_header_h1_Contact'); ?>) no-repeat; background-position: center center; background-size: auto;">
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
                <h2 class="content_in_header_h2_FAQ"><?php echo get_theme_mod('title_section_1_Contact'); ?></h2>
            </div>
        </div>
    </header>


    <div class="FAQ_content_main">
        <div class="Title_questions_FAQ">
            <h2><?php echo get_theme_mod('title_section_2_Contact'); ?></h2>
        </div>
    </div>
    <div class="form_page_contact">
        <form class="form_send_contact_section" action="procesar.php" method="post">
            <div class="i2_contact_line_section">
                <label for="name">NOMBRE</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="i2_contact_line_section">
                <label for="email">CORREO</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="i2_contact_line_section">
                <label for="tel">TELÉFONO</label>
                <input type="number" id="tel" name="tel" required>
            </div>
            <div class="i2_contact_line_section destextarea">
                <label for="message">MENSAJE</label>
                <input type="text" id="message" name="message" required>
            </div>
            <div class="btn_form_contact">
                <button type="submit">ENVIAR MENSAJE</button>
            </div>
        </form>
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.7775799704245!2d-84.1675452241294!3d9.95245497384936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fbed4b855555%3A0x81ceaa19d00eaf79!2sOficentro%20Latitud%20Norte!5e0!3m2!1ses!2scr!4v1698415542818!5m2!1ses!2scr"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <script type="text/javascript">
    const navToggle = document.querySelector(".navbar_toggle");
    const links = document.querySelector(".main_nav");

    navToggle.addEventListener('click', function() {
        links.classList.toggle("show_nav");
    })
    </script>
    <?php
        get_footer();
    ?>