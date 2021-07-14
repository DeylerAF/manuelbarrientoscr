<?php

/**
 *
 *
 *@author Deyler Alvarez F. <deyler@webskillscr.com>
 *@link https://developer.wordpress.org/reference/funtions/wp-
 *
 */

//Variables
$footer_id = 207;
$frontpage_id = get_option('page_on_front');
$derechos_reservados = get_field('derechos_reservados', $frontpage_id);
$titulo_footer = get_field('titulo_footer', $footer_id);
$modulos_footer = get_field('modulos_footer', $footer_id);
?>

<!-- Menu Secundario -->
<?php // wp_nav_menu( array( 'theme_location'=>'secondary') ); 
?>
<!-- *** -->



<footer id="footer" class="row">



    <?php

    // Check value exists.
    if (have_rows('modulos_footer', $footer_id)) :

        // Loop through rows.
        while (have_rows('modulos_footer', $footer_id)) : the_row();

            // Case: Contacto layout.
            if (get_row_layout() == 'contacto') :                    
                //Variables
                $titulo_contacto = get_sub_field('titulo_contacto', $footer_id);
                $descripcion_contacto = get_sub_field('descripcion_contacto', $footer_id);
                $color_contacto = get_sub_field('color_contacto', $footer_id);
                $imagen_contacto = get_sub_field('imagen_contacto', $footer_id);
                $url_imagen_contacto = $imagen_contacto['url'];
                $alt_imagen_contacto = $imagen_contacto['alt'];
                $shortcode_formulario_contacto = get_sub_field('shortcode_formulario_contacto', $footer_id);
    ?>
                <!-- contacto -->
                <section id="contacto" class="row">
                    <div class="col-12 contacto">
                        <div class="row row_contacto">
                            <div class="col-12 col-lg-8 titulo_descripcion_shortcode">
                                <div class="row">
                                    <div class="col-12 titulo_contacto">
                                        <h2>
                                            <?php echo $titulo_contacto ?>
                                        </h2>
                                    </div>
                                    <div class="col-12 descripcion_contacto">
                                        <?php echo $descripcion_contacto ?>
                                    </div>
                                    <div class="col-12 contacto_contacto">
                                        <div class="row row_contacto_contacto">
                                            <?php if ($shortcode_formulario_contacto) : ?>
                                                <!-- Shortcode de Formulario de Contacto -->
                                                <div class="col-12 shortcode_formulario_contacto">
                                                    <?php echo do_shortcode($shortcode_formulario_contacto) ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 imagenes_redes_sociales">
                                <div class="row row_imagenes_redes_sociales">
                                    <!-- imagen_contacto -->
                                    <div class="col-12 col-lg-10 imagen_contacto">
                                        <div class="row row_imagen_contacto">
                                            <figure>
                                                <img class="img-fluid" src="<?php echo $url_imagen_contacto ?>" alt="<?php echo $alt_imagen_contacto ?>">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- *** -->
                                    <!-- redes_sociales_contacto -->
                                    <?php if (have_rows('redes_sociales_contacto', $footer_id)) : ?>
                                        <div class="col-12 col-lg-2 redes_sociales_contacto">
                                            <div class="row row_redes_sociales_contacto">
                                                <?php while (have_rows('redes_sociales_contacto', $footer_id)) : the_row(); ?>
                                                    <?php
                                                    //Variables
                                                    $icono_redes_sociales_contacto = get_sub_field('icono_redes_sociales_contacto');
                                                    $link_redes_sociales_contacto = get_sub_field('link_redes_sociales_contacto');
                                                    $url_icono_redes_sociales_contacto = $icono_redes_sociales_contacto['url'];
                                                    $alt_icono_redes_sociales_contacto = $icono_redes_sociales_contacto['alt'];
                                                    ?>
                                                    <a href="<?php echo $link_redes_sociales_contacto ?>" target="_black" class="red_social_contacto">
                                                        <img src="<?php echo $url_icono_redes_sociales_contacto ?>" alt="<?php echo $alt_icono_redes_sociales_contacto ?>">
                                                    </a>
                                                <?php endwhile; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <!-- *** -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- *** -->

                <style>
                    #contacto {
                        background-color: <?php echo $color_contacto ?>;
                    }
                </style> 
    <?php
    // Do something...
            endif;
        // End loop.
        endwhile;
    // No value.
    else :
    // Do something...
    endif;
    ?>

    <div class="col-12 copyright">
        <!-- <?php //echo $derechos_reservados 
                ?> -->
        Copyright &copy; 2021 WebSkillsCR
    </div>
</footer>

<!-- Slick -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/slick/slick.min.js"></script>
<!-- Functions -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/functions.js"></script>



<!-- Footer -->
<?php wp_footer(); ?>

</body>

</html>