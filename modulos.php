<?php if (have_rows('modulos')) : ?>
    <?php $cantidadModulos = 1; ?>
    <?php while (have_rows('modulos')) : the_row(); ?>

        <?php if (get_row_layout() == 'inicio') : ?>
        <?php get_template_part('template-parts/inicio'); ?>

        <?php elseif (get_row_layout() == 'acerca_de_mi') : ?>
            <?php get_template_part('template-parts/acerca-de-mi'); ?>

        <?php elseif (get_row_layout() == 'letras') : ?>
            <?php get_template_part('template-parts/letras-felices'); ?>

        <?php elseif (get_row_layout() == 'libros') : ?>
            <?php get_template_part('template-parts/libros'); ?>

        <?php elseif (get_row_layout() == 'contactame') : ?>
            <?php get_template_part('template-parts/contactame'); ?>

        <?php endif; ?>

        <?php $cantidadModulos++; ?>
    <?php endwhile; ?>
<?php endif; ?>