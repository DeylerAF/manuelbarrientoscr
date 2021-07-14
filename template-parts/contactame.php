<?php
//Variables
$titulo_contactame = get_sub_field('titulo_contactame');
$subtitulo_contactame = get_sub_field('subtitulo_contactame');
$descripcion_contactame = get_sub_field('descripcion_contactame');
$shortcode_formulario_contactame = get_sub_field('shortcode_formulario_contactame');
$imagen_contactame = get_sub_field('imagen_contactame');
$url_imagen_contactame = $imagen_contactame[url];
$alt_imagen_contactame = $imagen_contactame[alt];
$title_imagen_contactame = $imagen_contactame[title];
?>

<!-- Sección "Contáctame" -->
<section id="contactame" class="row">
    <!-- Título -->
    <h2 class="col-12 titulo_contactame">
        <?php echo $titulo_contactame ?>
    </h2>
    <div class="col-6">
        <h4 class="col-12 subtitulo_contactame">
            <?php echo $subtitulo_contactame ?>
        </h4>
        <!-- Descripción -->
        <div class="col-12 descripcion_contactame">
            <?php echo $descripcion_contactame ?>
        </div>
        <!-- Formulario de Contacto -->
        <div class="col-12">
            <?php if ($shortcode_formulario_contactame) : ?>
                <!-- Shortcode de Formulario de Contacto -->
                <div class="col-12 shortcode_formulario_contactame">
                    <?php echo do_shortcode($shortcode_formulario_contactame) ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Imagen -->
    <figure class="col-6">
        <img class="img-fluid" src="<?php echo $url_imagen_contactame ?>" alt="<?php echo $alt_imagen_contactame ?>" title="<?php echo $title_imagen_contactame ?>">
    </figure>
</section>