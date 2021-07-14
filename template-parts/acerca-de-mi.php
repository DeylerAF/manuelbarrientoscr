<?php
//Variables
$titulo_acerca_de_mi = get_sub_field('titulo_acerca_de_mi');
$imagen_acerca_de_mi = get_sub_field('imagen_acerca_de_mi');
$url_imagen_acerca_de_mi = $imagen_acerca_de_mi[url];
$alt_imagen_acerca_de_mi = $imagen_acerca_de_mi[alt];
$title_imagen_acerca_de_mi = $imagen_acerca_de_mi[title];
$subtitulo_acerca_de_mi = get_sub_field('subtitulo_acerca_de_mi');
$descripcion_acerca_de_mi = get_sub_field('descripcion_acerca_de_mi');
?>

<!-- Sección "Acerca de Mí" -->
<section id="acerca_de_mi" class="row">
    <div class="col-12 acerca_de_mi">
        <div class="row row_acerca_de_mi">
            <!-- Título -->
            <div class="col-12 titulo_acerca_de_mi">
                <h2>
                    <?php echo $titulo_acerca_de_mi ?>
                </h2>
            </div>
            <!-- Imagen -->
            <div class="col-12 imagen_acerca_de_mi">
                <figure>
                    <img class="img-fluid" src="<?php echo $url_imagen_acerca_de_mi ?>" alt="<?php echo $alt_imagen_acerca_de_mi ?>" title="<?php echo $title_imagen_acerca_de_mi ?>">
                </figure>
            </div>
            <!-- Subtitulo -->
            <div class="col-12 subtitulo_acerca_de_mi">
                <h2>
                    <?php echo $subtitulo_acerca_de_mi ?>
                </h2>
            </div>
            <!-- Descripción -->
            <div class="col-12 descripcion_acerca_de_mi">
                <?php echo $descripcion_acerca_de_mi ?>
            </div>
        </div>
    </div>
</section>