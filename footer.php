<div class="footer">
    <div class="contact_items">
        <div class="footer_contact_item">
            <div class="img_footer_item">
                <img src="<?php echo esc_html(get_theme_mod('img_map_contact')); ?>">
            </div>
            <div class="text_footer_item">
                <h2><?php echo esc_html(get_theme_mod('title_map_contact')); ?></h2>
                <p><?php echo esc_html(get_theme_mod('descrip_map_contact')); ?></p>
            </div>
        </div>
        <div class="footer_contact_item">
            <div class="img_footer_item">
                <img src="<?php echo esc_html(get_theme_mod('img_email_contact')); ?>">
            </div>
            <div class="text_footer_item">
                <h2><?php echo esc_html(get_theme_mod('title_email_contact')); ?></h2>
                <p><?php echo esc_html(get_theme_mod('descrip_email_contact')); ?></p>
            </div>
        </div>
        <div class="footer_contact_item">
            <div class="img_footer_item">
                <img src="<?php echo esc_html(get_theme_mod('img_phone_contact')); ?>">
            </div>
            <div class="text_footer_item">
                <h2><?php echo esc_html(get_theme_mod('title_llamanos_contact')); ?></h2>
                <p><?php echo esc_html(get_theme_mod('descrip_llamanos_contact')); ?></p>
            </div>
        </div>
    </div>

    <div class="form_content_contact">
        <div class="img_contenedor_1">
            <img src="<?php echo esc_html(get_theme_mod('img_contenedor')); ?>">
        </div>
        <div class="content_form_contact">
            <div class="title_form_contact">
                <h2>CONTACTÁNOS</h2>
            </div>
            <form class="form_send_contact" action="procesar.php" method="post">
                <div class="i2_contact_line">
                    <label for="name">NOMBRE</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="i2_contact_line">
                    <label for="email">CORREO</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="i2_contact_line destextarea">
                    <label for="message">MENSAJE</label>
                    <input type="text" id="message" name="message" required>
                </div>
                <div class="btn_form_contact">
                    <button type="submit">ENVIAR MENSAJE</button>
                </div>
            </form>
        </div>
    </div>
    <?php
        $ano_actual = date("Y");
    ?>
    <div class="footer_last_section">
        <p> <img class="img_logo_section" src="<?php echo esc_html(get_theme_mod('img_footer_last_section')); ?>"> &copy; SMART LOCK <?php echo  $ano_actual;  ?></p>
    </div>
</div>