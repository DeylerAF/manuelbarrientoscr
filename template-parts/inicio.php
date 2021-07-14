<?php
//Variables
$plantilla_inicio = get_field('plantilla_inicio');
// Check value exists.
if (have_rows('plantilla_inicio')) :

    // Loop through rows.
    while (have_rows('plantilla_inicio')) : the_row();

        // Case: Banner layout.
        if (get_row_layout() == 'banner') :
            //Variables
            $titulo_banner_inicio = get_sub_field('titulo_banner_inicio');
            $description_banner_inicio = get_sub_field('description_banner_inicio');
            $shortcode_contacto_banner_inicio = get_sub_field('shortcode_contacto_banner_inicio');
            $imagen_banner_inicio = get_sub_field('imagen_banner_inicio');
            $url_imagen_banner_inicio = $imagen_banner_inicio['url'];
        // Do something...

        // Case: Descripcion layout.
        elseif (get_row_layout() == 'descripcion') :
            //Variables
            $titulo_seccion = get_sub_field('titulo_seccion');
            $descripcion_seccion = get_sub_field('descripcion_seccion');
            $imagen_seccion = get_sub_field('imagen_seccion');
            $url_imagen_seccion = $imagen_seccion['url'];
        // Do something...

        // Case: Recomendaciones layout.
        elseif (get_row_layout() == 'recomendaciones') :
            //Variables
            $titulo_recomendaciones = get_sub_field('titulo_recomendaciones');
        // Do something...

        // Case: Redacciones layout.
        elseif (get_row_layout() == 'redacciones') :
            //Variables
            $titulo_redacciones = get_sub_field('titulo_redacciones');
        // Do something...

        // Case: Testimonios layout.
        elseif (get_row_layout() == 'testimonios') :
            //Variables
            $titulo_testimonios = get_sub_field('titulo_testimonios');
        // Do something...

        endif;

    // End loop.
    endwhile;

// No value.
else :
// Do something...
endif;
?>
<section id="banner" class="row">
    <div class="col-12 banner">
        <div class="row row_banner">
            <div class="col-12 col-lg-6 imagen_banner_inicio">
                <div class="row row_imagen_banner_inicio">
                    <figure>
                        <img class="img-fluid" src="<?php echo $url_imagen_banner_inicio ?>" alt="<?php echo $url_imagen_banner_inicio ?>" title="<?php echo $url_imagen_banner_inicio ?>">
                    </figure>
                </div>
            </div>
            <div class="col-12 col-lg-6 titulo_description_contacto">
                <div class="row row_titulo_description_contacto">
                    <div class="col-12 titulo_banner_inicio">
                        <h2>
                            <?php echo $titulo_banner_inicio ?>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-12 description_banner_inicio">
                        <?php echo $description_banner_inicio ?>
                    </div>
                </div>
            </div>
            <div class="col-12 contacto_banner">
                <div class="row row_contacto_banner">
                    <?php if ($shortcode_contacto_banner_inicio) : ?>
                        <!-- Shortcode de Formulario de Contacto -->
                        <div class="col-12 col-lg-8 shortcode_contacto_banner_inicio">
                            <?php echo do_shortcode($shortcode_contacto_banner_inicio) ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="descripcion" class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="row">
                    <?php echo $titulo_seccion ?>
                    <?php echo $descripcion_seccion ?>
                </div>
            </div>
            <figure class="col-12 col-lg-6">
                <img class="img-fluid" src="<?php echo $url_imagen_seccion ?>" alt="<?php echo $url_imagen_seccion ?>" title="<?php echo $url_imagen_seccion ?>">
            </figure>
        </div>
    </div>
</section>
<section id="recomendaciones" class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h2>
                        <?php echo $titulo_recomendaciones ?>
                    </h2>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php
                    //Argumentos de "libros" 
                    $argRecomendacion = array(
                        'posts_per_page' => 3,
                        'post_type' => 'recomendacion'
                    );

                    // the query
                    $queryRecomendacion = new WP_Query($argRecomendacion); ?>

                    <?php if ($queryRecomendacion->have_posts()) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ($queryRecomendacion->have_posts()) : $queryRecomendacion->the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <!-- pagination here -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="redacciones" class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h2>
                        <?php echo $titulo_redacciones ?>
                    </h2>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php
                    //Argumentos de "redacciones" 
                    $argRedacciones = array(
                        'posts_per_page' => 3,
                        'post_type' => 'redaccion'
                    );

                    // the query
                    $queryRedacciones = new WP_Query($argRedacciones); ?>

                    <?php if ($queryRedacciones->have_posts()) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ($queryRedacciones->have_posts()) : $queryRedacciones->the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <!-- pagination here -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="testimonios" class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h2>
                        <?php echo $titulo_testimonios ?>
                    </h2>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php
                    //Argumentos de "testimonios" 
                    $argTestimonios = array(
                        'posts_per_page' => 3,
                        'post_type' => 'testimonio'
                    );

                    // the query
                    $queryTestimonios = new WP_Query($argTestimonios); ?>

                    <?php if ($queryTestimonios->have_posts()) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ($queryTestimonios->have_posts()) : $queryTestimonios->the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <!-- pagination here -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>